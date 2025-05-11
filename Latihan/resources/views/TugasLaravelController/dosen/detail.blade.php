@extends('TugasLaravelController.master')
@section('title', 'Detail Dosen')

@section('content')
    
<h2>Dosen</h2>
<ul>
@if (count($dosen) > 0)
    @foreach ($dosen as $item)
        <li> {{ $item }}</li>
    @endforeach
@else
    <li> Belum ada data</li>
@endif
</ul>
@endsection