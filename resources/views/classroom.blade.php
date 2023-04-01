@extends('layouts.mainlayout')

@section('title', 'Class Room')

@section('content')
<h1>Ini Halaman Class Room</h1>

<tr>Daftar Kelas</tr>
<table class="table">
    <tr>
        <th>No</th>
        <th>Ruang Kelas</th>
    </tr>
    @foreach ($ClassRoom as $data )
    <tr>
        <td>{{ $loop->iteration }}</td>//untuk nomor pada tabel
        <td>{{ $data->name }}</td>
    </tr>
    @endforeach


@endsection
