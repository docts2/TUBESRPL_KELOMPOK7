@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog</h1>
    @foreach($blogs as $blog)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{{ $blog->content }}</p>
            </div>
        </div>
    @endforeach

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Write a Blog</h5>
            <form action="{{ route('blogs.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
