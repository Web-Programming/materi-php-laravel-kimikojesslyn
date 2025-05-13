<?php

namespace App\Http\Controllers\TugasLaravelController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Prodi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return(view('TugasLaravelController.prodi.index'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prodiList = [
            1 => (object)[
                'nama' => 'Sistem Informasi',
                'deskripsi' => 'Program Studi Sistem Informasi'
            ],
            2 => (object)[
                'nama' => 'Manajemen',
                'deskripsi' => 'Program Studi Manajemen'
            ],
            3 => (object)[
                'nama' => 'Akuntasi',
                'deskripsi' => 'Program Studi Akuntasi'
            ],
            4 => (object)[
                'nama' => 'Teknik Elektro',
                'deskripsi' => 'Program Studi Teknik Elektro'
            ],
            5 => (object)[
                'nama' => 'Informatika',
                'deskripsi' => 'Program Studi Informatika'
            ],

        ];

        $prodi = $prodiList[$id];

        return view('TugasLaravelController.prodi.detail', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
