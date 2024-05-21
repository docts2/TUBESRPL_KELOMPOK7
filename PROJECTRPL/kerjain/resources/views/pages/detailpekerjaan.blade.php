<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal - Design & Creative Jobs</title>
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
        <img src="{{ asset('assets/img/detail_pekerjaan/graphic.jpg') }}" alt="Job Image">
    </div>
    <div class="job-content">
        <div class="job-header">
            <div class="job-title">Graphic Designer</div>
            <div class="company-name">PT Mencari Cinta Sejati</div>
        </div>
        <div class="job-details">
            <div class="job-detail-item">
                <strong>Lokasi:</strong> Jakarta, Indonesia
            </div>
            <div class="job-detail-item">
                <strong>Waktu Pekerjaan:</strong> Full-time
            </div>
            <div class="job-detail-item">
                <strong>Gaji:</strong> IDR 10,000,000 - 15,000,000 per bulan
            </div>
            <div class="job-detail-item">
                <strong>Deskripsi Pekerjaan:</strong>
                <p>Kami mencari Desainer Grafis berbakat untuk menciptakan pengalaman pengguna yang luar biasa. Kandidat yang ideal harus memiliki minat terhadap desain yang bersih dan berseni, memiliki keterampilan UI yang unggul, dan mampu menerjemahkan persyaratan tingkat tinggi ke dalam alur interaksi dan artefak, serta mengubahnya menjadi antarmuka pengguna yang indah, intuitif, dan fungsional.</p>
            </div>
            <div class="job-detail-item">
                <strong>Tanggung Jawab:</strong>
                <ul>
                    <li>Berkolaborasi dengan manajemen dan teknik produk untuk menentukan dan menerapkan solusi inovatif untuk arah produk, visual, dan pengalaman</li>
                    <li>Jalankan semua tahapan desain visual mulai dari konsep, penyerahan akhir, hingga rekayasa</li>
                    <li>Konseptualisasikan ide orisinal yang menghadirkan kesederhanaan dan kemudahan penggunaan pada hambatan desain yang kompleks</li>
                </ul>
            </div>
            <div class="job-detail-item">
                <strong>Kualifikasi:</strong>
                <ul>
                    <li>Pengalaman desain grafis yang terbukti</li>
                    <li>Keterampilan desain grafis yang dapat dibuktikan dengan portofolio yang kuat</li>
                    <li>Kemahiran dalam Photoshop, Illustrator, atau desain visual dan alat pembingkaian kawat lainnya</li>
                    <li>Keterampilan desain visual yang sangat baik dengan kepekaan terhadap interaksi sistem pengguna</li>
                    <li>Kemampuan untuk mempresentasikan desain Anda dan menjual solusi Anda ke berbagai pemangku kepentingan</li>
                </ul>
            </div>
        </div>
        <a href="#" class="apply-btn">Apply Sekarang</a>
    </div>
</div>

</body>
</html>
