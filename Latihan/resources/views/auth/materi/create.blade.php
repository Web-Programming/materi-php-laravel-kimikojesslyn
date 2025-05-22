@extends('TugasLaravel.master')
@section('title', 'Tambah Materi')

@section('content')
    
<h2>Materi</h2>
<ul>
@if (count($materi) > 0)
    @foreach ($materi as $item)
        <li> {{ $item }}</li>
    @endforeach
@else
    <li> Belum ada Materi</li>
@endif
</ul>
@endsection