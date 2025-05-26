@extends('laravel.master')

@section('content')
    <div class="container mt-4">
        <h3>Daftar Materi</h3>

        <a href="#" class="btn btn-success mb-3"> Tambah</a>

        @php
            $materiList = [
                (object) [
                    'id' => 1,
                    'nama' => 'Materi 1',
                    'deskripsi' => '-'
                ],
                (object) [
                    'id' => 2,
                    'nama' => 'Materi 2',
                    'deskripsi' => '-'
                ],
                (object) [
                    'id' => 3,
                    'nama' => 'Materi 3',
                    'deskripsi' => '-'
                ],
            ];
        @endphp

        <table class="table table-bordered table-striped">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Materi</th>
                        <th>Deskripsi</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materiList as $index => $materi)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $materi->nama }}</td>
                            <td>{{ $materi->deskripsi }}</td>
                            <td>
                                <center>
                                    <a href="{{ url('materi/' . $materi->id) }}" class="btn btn-info btn-sm">Detail</a>
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Hapus data ini?')">Delete</button>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection