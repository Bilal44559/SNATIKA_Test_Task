@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="container flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between pt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style2 mb-0">
                    <li class="breadcrumb-item">
                        <a href="">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('posts') }}">Posts</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Post</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="my-5">
                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">Edit Post Details</h5>
                            </div>
                            <div class="card-body">
                                <!-- Display Validation Errors -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!-- Display Success Message -->
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="title">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post Title" value="{{ old('title', $post->title) }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="description">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter Post Description">{{ old('description', $post->description) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="status">Status</label>
                                        <div class="col-sm-10">
                                            <select name="status" id="status" class="form-control">
                                                <option value="0" {{ old('status', $post->status) == '0' ? 'selected' : '' }}>Inactive</option>
                                                <option value="1" {{ old('status', $post->status) == '1' ? 'selected' : '' }}>Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="category_id">Categories</label>
                                        <div class="col-sm-10">
                                            <select name="category_id" id="category_id" class="form-control">
                                                @if ($categories->count() > 0)
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}" {{ old('category_id', $post->category_id) == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                    @endforeach
                                                @else
                                                    <option value="">No Category found!</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="image">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control" id="image" />
                                        </div>
                                    </div>
                                    @if ($post->image)
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Current Image</label>
                                        <div class="col-sm-10">
                                            <img src="{{ asset('storage/'.$post->image) }}" alt="Post Image" class="img-fluid" width="200">
                                        </div>
                                    </div>
                                    @endif
                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-backdrop fade"></div>
</div>

<script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.3.1/"
        }
    }
</script>

<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Bold,
        Italic,
        Font,
        Paragraph
    } from 'ckeditor5';

    ClassicEditor
        .create( document.querySelector( '#description' ), {
            plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
            ]
        } )
        .then( /* ... */ )
        .catch( /* ... */ );
</script>
@endsection
