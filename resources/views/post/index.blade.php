@extends('layouts.app')


@section('main')
<div class="wrap-table">
    <a class="btn btn-sm btn-primary" href="{{ route('post.create') }}">Add New Post</a>
    <a class="btn btn-sm btn-warning" href="{{ route('category.index') }}">All Category</a>
    <div class="card shadow">
        <div class="card-body">
            <h2>All Data</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Post Title</th>
                    <th>Post Slug</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($all_post as $post)
                    <tr>
                        <td>{{ $loop -> index+1 }}</td>
                        <td>{{ $post -> post_title }}</td>
                        <td>{{ $post -> post_slug }}</td>
                        <td>
                        @foreach($post -> categories as $pst)
                            {{ $pst -> category_name }} -
                        @endforeach
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info" href="#">View</a>
                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
