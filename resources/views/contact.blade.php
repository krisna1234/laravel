@extends('layouts.mainlayout')

@section('title', 'Contact')

@section('content')

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No Telp</th>
        <th>Alamat</th>
    </tr>
    <tr>
        <td>1</td>
        <td>{{ $nama }}</td>
        <td>{{ $no_telp }}</td>
        <td>{{ $alamat }}</td>
    </tr>
</table>
@endsection
