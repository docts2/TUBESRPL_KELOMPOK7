@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Saved Jobs</h1>
    @foreach($savedJobs as $job)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $job->title }}</h5>
                <p class="card-text">{{ $job->description }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
