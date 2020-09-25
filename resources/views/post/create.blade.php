@extends('layouts.app')


@section('main')
<div class="wrap">
    <a class="btn btn-sm btn-primary" href="{{ route('post.index') }}">All Post</a>
    <div class="card shadow">
        <div class="card-body">
            <h2>Add Post</h2>
            <form action="{{ route('post.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Post Title</label>
                    <input class="form-control" name="postTitle" type="text">
                </div>
                <div class="form-group">
                    <label for="">Category Name</label>
                    <select name="sCategoryName" class="form-control" id="">
                    @foreach($category_a as $category)
                        <option value="{{ $category -> id }}">{{ $category -> category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Post Content</label>
                    <input class="form-control" name="postContent" type="text">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection








