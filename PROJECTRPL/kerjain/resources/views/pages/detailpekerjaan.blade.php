<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $job->description }}">
    <title>{{ $job->title }} - Job Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
        }
        .job-image {
            width: 30%;
            padding-right: 20px;
        }
        .job-image img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .job-content {
            width: 70%;
        }
        .job-header {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .job-title {
            font-size: 24px;
            color: #333;
        }
        .company-name {
            font-size: 18px;
            color: #777;
        }
        .job-details {
            margin: 20px 0;
        }
        .job-detail-item {
            margin-bottom: 10px;
        }
        .apply-btn {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }
        .apply-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="job-image">
            <img src="{{ asset($job->image_path) }}" alt="Job Image">
        </div>
        <div class="job-content">
            <div class="job-header">
                <div class="job-title">{{ $job->title }}</div>
                <div class="company-name">{{ $job->company_name }}</div>
            </div>
            <div class="job-details">
                <div class="job-detail-item">
                    <strong>Lokasi:</strong> {{ $job->location }}
                </div>
                <div class="job-detail-item">
                    <strong>Waktu Pekerjaan:</strong> {{ $job->employment_type }}
                </div>
                <div class="job-detail-item">
                    <strong>Gaji:</strong> {{ $job->salary }}
                </div>
                <div class="job-detail-item">
                    <strong>Deskripsi Pekerjaan:</strong>
                    <p>{{ $job->description }}</p>
                </div>
                <div class="job-detail-item">
                    <strong>Tanggung Jawab:</strong>
                    <ul>
                        @foreach(explode("\n", $job->responsibilities) as $responsibility)
                            <li>{{ $responsibility }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="job-detail-item">
                    <strong>Kualifikasi:</strong>
                    <ul>
                        @foreach(explode("\n", $job->qualifications) as $qualification)
                            <li>{{ $qualification }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <a href="/" class="apply-btn">Apply Sekarang</a>
        </div>
    </div>
</body>
</html>
