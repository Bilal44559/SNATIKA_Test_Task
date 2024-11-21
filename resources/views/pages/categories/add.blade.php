@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container flex-grow-1 container-p-y">
            <div class="d-flex justify-content-between pt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                        <li class="breadcrumb-item">
                            <a href="">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Categories</a>
                        </li>
                        <li class="breadcrumb-item active">Create Category</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-5">
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Enter Category details</h5>
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

                                    <form action="{{ route('categories.store') }}" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="name">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control"
                                                    id="name" placeholder="Enter Category Name" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="status">Status</label>
                                            <div class="col-sm-10">
                                                <select name="status" id="status" class="form-control">
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                </select>
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
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
