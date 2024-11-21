@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container flex-grow-1">
            <div class="d-flex justify-content-between py-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                        <li class="breadcrumb-item">
                            <a href="">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Posts</li>
                    </ol>
                </nav>
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <!-- Table for Posts -->
                        <div class="card">
                            <h5 class="card-header">Posts</h5>
                            <div class="table-responsive text-nowrap">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($posts->count() > 0)
                                            @foreach ($posts as $key => $post)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $post->title }}</td>
                                                    <td>{{ $post->status ? 'Active' : 'Inactive' }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm me-2">
                                                                Edit
                                                            </a>

                                                            <!-- Delete Button -->
                                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="100" class="text-center">No Record Found !</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
@endsection
