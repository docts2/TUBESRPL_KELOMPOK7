<!-- resources/views/jobs/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $job->title }}</h1>
    <p>{{ $job->description }}</p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>Ulasan</h2>
    @foreach($job->reviews as $review)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $review->user->name }}</h5>
                <p class="card-text">{{ $review->review }}</p>
            </div>
        </div>
    @endforeach

    @auth
        <h2>Tambah Ulasan</h2>
        <form action="{{ route('reviews.store', $job->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="review" id="review" class="form-control" rows="5" placeholder="Tulis ulasan Anda di sini..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
        </form>
    @else
        <p>Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan ulasan.</p>
    @endauth
</div>
@endsection
