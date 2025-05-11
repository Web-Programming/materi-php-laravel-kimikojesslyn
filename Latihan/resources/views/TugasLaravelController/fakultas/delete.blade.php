@extends('TugasLaravelController.master')
@section('title', 'Hapus Fakultas')

@section('content')
    
<h2>Fakultas</h2>
<ul>
@if (count($fakultas) > 0)
    @foreach ($fakultas as $item)
        <li> {{ $item }}</li>
    @endforeach
@else
    <li> Belum ada data</li>
@endif
</ul>
@endsection