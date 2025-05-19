@extends('TugasLaravel.master')
@section('title', 'Hapus Prodi')

@section('content')
    
<h2>Program Studi</h2>
<ul>
@if (count($prodi) > 0)
    @foreach ($prodi as $item)
        <li> {{ $item }}</li>
    @endforeach
@else
    <li> Belum ada data</li>
@endif
</ul>
@endsection