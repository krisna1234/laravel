@extends('layouts.mainlayout')

@section('title', 'home')

@section('content')
<h1>Ini halaman home</h1>
<h2>Selamat Datang, {{ $name }}</h2>
<h2>{{ $role }}</h2>

            {{-- @if ($role == 'admin')
                <a href="">ke halaman admin</a>
            @elseif ($role == 'staff')
                <a href="">ke halaman staff</a>
            @else
                <a href="">ke halaman Ndak Tau</a>
            @endif --}}

            {{-- @switch( $role)
                @case($role == 'admin')
                    <a href="">ke halaman admin</a>
                    @break
                @case($role == 'staff')
                    <a href="">ke halaman staff</a>
                    @break

                @default
                <a href=""> ke halaman Gak Tau!</a> --}}
                {{-- @endswitch --}}

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>
        @foreach ( $buah as $data )
    <tr>
        <td>{{ $loop ->iteration }}</td>
        <td>{{ $data  }}</td>
    </tr>
        @endforeach
</table>
@endsection
