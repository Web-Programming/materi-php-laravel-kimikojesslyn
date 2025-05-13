<?php

namespace App\Http\Controllers\TugasLaravelController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Fakultas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return(view('TugasLaravelController.fakultas.index'));
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
        $fakultasList = [
            1 => (object)[
                    'nama' => 'Ilmu Komputer dan Rekayasa',
                    'deskripsi' => 'Fakultas ilmu komputer dan rekayasa'
            ],
            2 => (object)[
                    'nama' => 'Ekonomi dan Bisnis',
                    'deskripsi' => 'Fakultas ekonomi dan bisnis'
            ],
        ];
            $fakultas = $fakultasList[$id];
        return view('TugasLaravelController.fakultas.detail', compact('fakultas'));
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
