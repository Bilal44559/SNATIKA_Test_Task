
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
                    <li class="breadcrumb-item active">Edit Slider</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="my-5">
                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">Edit Slider details</h5>
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

                                <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="title">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post Title" value="{{ old('title', $slider->title) }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="image">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control" id="image" value="{{ old('image', $slider->image) }}" />
                                            @if($slider->image)
                                            <img src="{{ asset('storage/'.$slider->image) }}" style="height: 100px;" />
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="image">Link</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="link" placeholder="Enter Your Link" class="form-control" value="{{ old('link', $slider->link) }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="image">Link Text</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="button_text" placeholder="Enter Button Text" class="form-control"  value="{{old('button_text', $slider->button_text)}}"/>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="description">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter Post Description">{{ old('description', $slider->description) }}</textarea>
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

@endsection
