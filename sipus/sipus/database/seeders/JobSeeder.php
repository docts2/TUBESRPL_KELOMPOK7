<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run()
    {
        Job::create([
            'title' => 'Software Engineer',
            'description' => 'Develop and maintain software applications.',
        ]);

        Job::create([
            'title' => 'Data Analyst',
            'description' => 'Analyze data to help companies make informed decisions.',
        ]);

        // Tambahkan lebih banyak lowongan pekerjaan jika diperlukan
    }
}

