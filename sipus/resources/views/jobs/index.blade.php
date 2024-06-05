@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Job Listings</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @foreach($jobs as $job)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $job->title }}</h5>
                <p class="card-text">{{ $job->description }}</p>
                <form action="{{ route('jobs.save', $job->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Save Job</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
