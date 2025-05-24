@extends('laravel.master')
@section('title', 'Tambah Mahasiswa')

@section('content')
    
<h2>Mahasiswa</h2>
<ul>
@if (count($mahasiswa) > 0)
    @foreach ($mahasiswa as $item)
        <li> {{ $item }}</li>
    @endforeach
@else
    <li> Belum ada data</li>
@endif
</ul>
@endsection