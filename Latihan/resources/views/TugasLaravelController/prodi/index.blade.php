@extends('TugasLaravelController.master')

@section('content')
    <div class="container mt-4">
        <h3>Daftar Program Studi</h3>

        <a href="#" class="btn btn-primary mb-3">ADD Program Studi</a>

        @php
            $prodiList = [
                (object) [
                    'id' => 1,
                    'nama' => 'Sistem Informasi',
                    'deskripsi' => 'Program Studi Sistem Informasi'
                ],
                (object) [
                    'id' => 2,
                    'nama' => 'Manajemen',
                    'deskripsi' => 'Program Studi Manajemen'
                ],
                (object) [
                    'id' => 3,
                    'nama' => 'Akuntasi',
                    'deskripsi' => 'Program Studi Akuntasi'
                ],
                (object) [
                    'id' => 4,
                    'nama' => 'Teknik Elektro',
                    'deskripsi' => 'Program Studi Teknik Elektro'
                ],
                (object) [
                    'id' => 5,
                    'nama' => 'Informatika',
                    'deskripsi' => 'Program Studi Informatika'
                ],

            ];
        @endphp

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Program Studi</th>
                    <th>Deskripsi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodiList as $index => $prodi)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $prodi->nama }}</td>
                        <td>{{ $prodi->deskripsi }}</td>
                        <td>
                            <center>
                                <a href="{{ url('prodi/' . $prodi->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Delete</button>
                            </center>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection