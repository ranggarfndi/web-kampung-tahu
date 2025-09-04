<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', HomeController::class);

// TAMBAHKAN RUTE BARU INI
Route::get('/tentang', [HomeController::class, 'tentang']);