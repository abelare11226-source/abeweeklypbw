<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'home',
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile',
        'name' => 'Abelare',
        'nim' => '13242520033',
        'prodi' => 'Teknologi Informasi',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});

Route::get('/berita', [BeritaController::class, 'tampilberita'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberitatunggal'])->name('berita.show');
