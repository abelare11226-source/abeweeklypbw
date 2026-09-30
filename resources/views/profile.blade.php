@extends('layouts.main')

@section('content')
    <h1>Halaman Profile</h1>
    <p>Nama: {{ $name }}</p>
    <p>Nim: {{ $nim }}</p>
    <p>Prodi: {{ $prodi }}</p>
    <img src="{{ asset('images/bocilkece.jpg') }}" alt="Profile image" width="200" class="img-fluid rounded">
@endsection