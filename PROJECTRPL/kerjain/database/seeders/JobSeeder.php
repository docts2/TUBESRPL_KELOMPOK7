<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'title' => 'Graphic Designer',
            'company_name' => 'PT Mencari Cinta Sejati',
            'location' => 'Batam, Indonesia',
            'employment_type' => 'Full-time',
            'salary' => 'IDR 10,000,000 - 15,000,000 per bulan',
            'description' => 'Kami mencari Desainer Grafis berbakat untuk menciptakan pengalaman pengguna yang luar biasa. Kandidat yang ideal harus memiliki minat terhadap desain yang bersih dan berseni, memiliki keterampilan UI yang unggul, dan mampu menerjemahkan persyaratan tingkat tinggi ke dalam alur interaksi dan artefak, serta mengubahnya menjadi antarmuka pengguna yang indah, intuitif, dan fungsional.',
            'responsibilities' => 'Berkolaborasi dengan manajemen dan teknik produk untuk menentukan dan menerapkan solusi inovatif untuk arah produk, visual, dan pengalaman Jalankan semua tahapan desain visual mulai dari konsep, penyerahan akhir, hingga rekayasa Konseptualisasikan ide orisinal yang menghadirkan kesederhanaan dan kemudahan penggunaan pada hambatan desain yang kompleks',
            'qualifications' => 'Pengalaman desain grafis yang terbukti Keterampilan desain grafis yang dapat dibuktikan dengan portofolio yang kuat Kemahiran dalam Photoshop, Illustrator, atau desain visual dan alat pembingkaian kawat lainnya Keterampilan desain visual yang sangat baik dengan kepekaan terhadap interaksi sistem pengguna Kemampuan untuk mempresentasikan desain Anda dan menjual solusi Anda ke berbagai pemangku kepentingan',
            'image_path' => 'assets/img/detail_pekerjaan/graphic.jpg'
        ]);
    }
}
