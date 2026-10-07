@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="text-center mb-4">
            <h1>{{ $singlenews['judul'] }}</h1>
            <h5 class="text-muted">Penulis: {{ $singlenews['penulis'] }}</h5>
            <small class="text-muted">{{ \Carbon\Carbon::parse($singlenews['tanggal'])->format('d M Y') }}</small>
        </div>

        <div class="text-justify">
            <p>{{ $singlenews['isi'] }}</p>
        </div>

        <a href="/berita">Kembali</a>
    </div>
@endsection