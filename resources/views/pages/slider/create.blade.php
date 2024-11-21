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
                        <a href="{{ route('slider') }}">Slider</a>
                    </li>
                    <li class="breadcrumb-item active">Create Slider</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="my-5">
                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">Enter Slider details</h5>
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

                                <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="title">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post Title" value="{{ old('title') }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="image">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control" id="image" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="image">Link</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="link" placeholder="Enter Your Link" class="form-control"  />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="image">Link Text</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="button_text" placeholder="Enter Button Text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="description">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter Post Description">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Save</button>
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




{{-- <script type="importmap">
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
</script> --}}

@endsection
