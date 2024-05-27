<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [BerandaController::class, 'index']);
#Route::get('/detailpekerjaan', [BerandaController::class, 'detail'])->name('detail-pekerjaan');
Route::get('/job/{id}', [JobController::class, 'show'])->name('job.show');