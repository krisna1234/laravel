@extends('layouts.mainlayout')

@section('title', 'home')

@section('content')
<h1>Ini Halaman Student</h1>
<h3>Student List</h3>
<table class="table"
    <tr>
        <th>Nama</th>
        <th>Gender</th>
        <th>Nis</th>
        <th>Class Id</th>
   </tr>
    @foreach ( $StudentList as $data )
    <tr>
        <td>{{ $data -> name }}</td>
        <td>{{ $data -> gender }}</td>
        <td>{{ $data -> nis }}</td>
        <td>{{ $data -> class_id }}</td>
    </tr>
    @endforeach


</table>
@endsection
