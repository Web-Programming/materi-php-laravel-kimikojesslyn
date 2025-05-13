@extends('TugasLaraveLController.master')

@section('content')
    <div class="container mt-4">
        <h3>Detail Program Studi</h3>
        <table class="table table-bordered">
            <tr>
                <th>Nama Prodi</th>
                <td>{{ $prodi->nama }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $prodi->deskripsi }}</td>
            </tr>
        </table>
        <a href="{{ url('prodi') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection