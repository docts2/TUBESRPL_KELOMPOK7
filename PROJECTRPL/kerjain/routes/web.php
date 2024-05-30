<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;



Route::get('/', [BerandaController::class, 'index']);
Route::get('/job/{id}', [JobController::class, 'show'])->name('job.show');
Route::resource('/profiles', ProfileController::class);
Route::get('/profiles/{profile}/resume', [ProfileController::class, 'resume'])->name('profiles.resume');