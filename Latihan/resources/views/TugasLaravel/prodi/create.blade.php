@extends('TugasLaravel.master')
@section('title', 'Tambah Prodi')

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

<form action="{{url("/prodi")}}" method="post">
    @csrf 
    <div class="">
        <label class="for">
            <input class="form-control" type="text" name="nama">
        </label>
    </div>
    <button type="submit" class="btn btn-success"> Save </button>
</form>
@endsection