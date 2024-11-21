@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container flex-grow-1 container-p-y">
            <div class="d-flex justify-content-between pt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-5">
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Update About Details</h5>
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

                                    <form action="{{ route('about.update', $about->id ?? '') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="id" value="{{ $about->id }}">
                                        <!-- Heading -->
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="heading">Heading</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="heading" class="form-control" id="heading"
                                                    placeholder="Enter the heading"
                                                    value="{{ old('heading', $about->heading ?? '') }}" />
                                            </div>
                                        </div>

                                        <!-- Sub Heading -->
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="sub_heading">Sub Heading</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="sub_heading" class="form-control"
                                                    id="sub_heading" placeholder="Enter the sub heading"
                                                    value="{{ old('sub_heading', $about->sub_heading ?? '') }}" />
                                            </div>
                                        </div>

                                        <!-- Description -->
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="description">Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter the description">{{ old('description', $about->description ?? '') }}</textarea>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
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
        <!-- / Content -->
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
            .create(document.querySelector('#description'), {
                plugins: [Essentials, Bold, Italic, Font, Paragraph],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            })
            .catch(error => console.error(error));
    </script>
@endsection
