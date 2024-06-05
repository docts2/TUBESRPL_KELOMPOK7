<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk menyimpan lowongan pekerjaan dengan middleware 'check.save.job'
Route::middleware(['check.save.job'])->group(function () {
    Route::post('/save-job', [JobController::class, 'save'])->name('job.save');
});
