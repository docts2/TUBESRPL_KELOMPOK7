@extends('template.template')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .card {
        border: none;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }

    .job-title {
        color: #333;
        margin-bottom: 10px;
    }

    .company-name {
        color: #777;
        margin-bottom: 20px;
    }

    .job-details p {
        margin-bottom: 10px;
    }

    .job-details ul {
        padding-left: 20px;
        list-style-type: disc; /* Menggunakan disk sebagai tanda poin */
    }

    .apply-btn {
        display: inline-block;
        padding: 10px 20px;
        color: #fff;
        background-color: #4a0d8c; /* Menggunakan warna biru indigo */
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .apply-btn:hover {
        background-color: #4a0d8c; /* Warna tombol saat hover */
    }

    .img-fluid {
        border-radius: 10px 0 0 10px;
    }
</style>

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset($job->image_path) }}" alt="Job Image" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h2 class="job-title">{{ $job->title }}</h2>
                            <h4 class="company-name">{{ $job->company_name }}</h4>
                            <div class="job-details">
                                <p><strong>Lokasi:</strong> {{ $job->location }}</p>
                                <p><strong>Waktu Pekerjaan:</strong> {{ $job->employment_type }}</p>
                                <p><strong>Gaji:</strong> {{ $job->salary }}</p>
                                <p><strong>Deskripsi Pekerjaan:</strong></p>
                                <p>{{ $job->description }}</p>
                                <p><strong>Tanggung Jawab:</strong></p>
                                <ul>
                                    @foreach(explode("\n", $job->responsibilities) as $responsibility)
                                    <li>{{ $responsibility }}</li>
                                    @endforeach
                                </ul>
                                <p><strong>Kualifikasi:</strong></p>
                                <ul>
                                    @foreach(explode("\n", $job->qualifications) as $qualification)
                                    <li>{{ $qualification }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br>
                            <br>
                            <a href="/profiles" class="apply-btn">Apply Sekarang</a>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
