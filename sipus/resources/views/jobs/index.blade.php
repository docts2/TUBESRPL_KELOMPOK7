@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Job Listings</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form Pencarian -->
    <form action="{{ route('jobs.search') }}" method="GET" class="mb-4">
        <div class="form-row">
            <div class="col-md-5">
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Masukkan kata kunci">
            </div>
            <div class="col-md-5">
                <input type="text" name="location" id="location" class="form-control" placeholder="Masukkan lokasi">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary btn-block">Cari</button>
            </div>
        </div>
    </form>

    <!-- Daftar Lowongan Pekerjaan -->
    @foreach($jobs as $job)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $job->title }}</h5>
                <p class="card-text">{{ $job->description }}</p>
                <p class="card-text"><small class="text-muted">{{ $job->location }}</small></p>
                <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-secondary">Lihat Ulasan</a>
                <form action="{{ route('jobs.save', $job->id) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-primary">Save Job</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
