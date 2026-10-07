@extends('layouts.main')

@section('content')
    <h1>Berita</h1>

    @foreach ($beritas as $berita)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="/berita/{{ $berita['slug'] }}" class="text-decoration-none">{{ $berita['judul'] }}</a>
                </h5>
                <p class="card-text">{{ $berita['isi'] }}</p>
                <p class="card-text">
                    <small class="text-muted">Diposting pada {{ \Carbon\Carbon::parse($berita['tanggal'])->format('d M Y') }}</small>
                </p>
            </div>
        </div>
    @endforeach
@endsection