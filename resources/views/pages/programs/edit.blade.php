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
                        <a href="{{ route('programs.index') }}">Programs</a>
                    </li>
                    <li class="breadcrumb-item active">Update Program</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="my-5">
                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">Update Program details</h5>
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

                                <!-- Update Form -->
                                <form action="{{ route('programs.update', $program->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') <!-- This specifies the PUT method for updating -->

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="icon">Icon</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="icon" class="form-control" id="icon" />
                                            @if ($program->icon)
                                                <p class="mt-2">
                                                    <img src="{{ asset('storage/' . $program->icon) }}" alt="Program Icon" width="50" height="50">
                                                    <small>Current Icon</small>
                                                </p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="title">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Program Title" value="{{ old('title', $program->title) }}" />
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="description">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter Program Description">{{ old('description', $program->description) }}</textarea>
                                        </div>
                                    </div>

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
