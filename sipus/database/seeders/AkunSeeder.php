<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'username'=>'admint',
                'name'=>'AkunAdmint',
                'email'=>'admint@gmail.com',
                'level'=>'admin',
                'password'=>Hash::make('123456')
            ],
            
            [
                'username'=>'userA',
                'name'=>'AkunUserA',
                'email'=>'userA@gmail.com',
                'level'=>'user',
                'password'=>Hash::make('123456')
            ],
            [
                'username'=>'userB',
                'name'=>'AkunUserB',
                'email'=>'userB@gmail.com',
                'level'=>'user',
                'password'=>Hash::make('123456')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}