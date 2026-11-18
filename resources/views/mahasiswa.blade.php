@extends('layouts.backend')

@section('content')
    <class class="container mt-5">
        <h3>Data Mahasiswa</h3>
        <button type="button" class="btn btn-success">Tambah Data</button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">prodi</th>
      <th scope="col">Email</th>
        <th scope="col">No Hp</th>
        <th scope="col">Foto</th>
        <th scope="col">Aksi</th>
    
    </tr>
  </thead>
  <?php $no = 1; ?>
  @foreach ($datas as $data)
  <tbody>
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $data->nama }}</td>
      <td>{{ $data->nim }}</td>
      <td>{{ $data->prodi }}</td>
      <td>{{ $data->email }}</td>
      <td>{{ $data->no_hp }}</td>
      <td>{{ $data->foto }}</td>

    <td>
    <button type="button" class="btn btn-primary">Edit</button>
    <button type="button" class="btn btn-primary">Hapus</button>
    </td>
    </tr>
    
    @endforeach
  </tbody>
</table>
    </class>
@endsection