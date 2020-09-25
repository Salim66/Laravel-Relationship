@extends('layouts.app')


@section('main')
<div class="wrap-table">
    <a class="btn btn-sm btn-primary" href="{{ route('category.create') }}">Add New Category</a>
    <a class="btn btn-sm btn-warning" href="{{ route('post.index') }}">All Post</a>
    <div class="card shadow">
        <div class="card-body">
            <h2>All Data</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Category Slug</th>
                    <th>Post Title</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($all_cate as $category)
                    <tr>
                        <td>{{ $loop -> index+1 }}</td>
                        <td>{{ $category -> category_name }}</td>
                        <td>{{ $category -> category_slug }}</td>
                        <td>
                            @foreach($category -> post as $p)
                                {{ $p -> post_title }} /
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
