<?php

use Illuminate\Support\Facades\Route;

$dataBerita = [
    [
        'judul' => 'Timnas Juara',
        'slug' => 'timnas-juara',
        'penulis' => 'Abelare',
        'isi' => 'Timnas Indonesia berhasil menjadi juara di ajang Piala AFF 2020 setelah mengalahkan Thailand dengan skor 4-2 di Stadion Nasional Singapura. Kemenangan ini menjadi kebanggaan bagi seluruh rakyat Indonesia dan menunjukkan kemampuan timnas dalam menghadapi tantangan besar di tingkat internasional.',
        'tanggal' => '2020-12-05',
    ],
    [
        'judul' => 'Piala Dunia 2022',
        'slug' => 'piala-dunia-2022',
        'penulis' => 'Ahmad',
        'isi' => 'Piala Dunia 2022 akan diselenggarakan di Qatar pada bulan November 2022. Ini adalah pertandingan sepak bola internasional yang diikuti oleh tim-tim nasional dari seluruh dunia.',
        'tanggal' => '2022-11-20',
    ],
];

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

Route::get('/berita', function () use ($dataBerita) {
    return view('berita', [
        'title' => 'Berita',
        'beritas' => $dataBerita,
    ]);
});

Route::get('/berita/{slug}', function (string $slug) use ($dataBerita) {
    $beritaDetail = collect($dataBerita)->firstWhere('slug', $slug);

    abort_if($beritaDetail === null, 404);

    return view('beritatunggal', [
        'title' => $beritaDetail['judul'],
        'singlenews' => $beritaDetail,
    ]);
});