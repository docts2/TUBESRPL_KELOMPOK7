<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jobs')->insert([
            [
                'title' => 'Software Engineer',
                'description' => 'Develop and maintain software applications.',
                'company' => 'Tech Corp',
                'location' => 'New York, NY',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Data Analyst',
                'description' => 'Analyze and interpret complex data sets.',
                'company' => 'Data Insights',
                'location' => 'San Francisco, CA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Product Manager',
                'description' => 'Oversee the development and launch of products.',
                'company' => 'Innovate Solutions',
                'location' => 'Boston, MA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
