<?php

namespace App\Http\Controllers\TugasLaravelController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dosen extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return(view('TugasLaravel.dosen.index'));
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
        $dosenList = [
            1 => (object)[
                'nama' => 'Andi',
                'program' => 'Sistem Informasi',
                'status' => 'Tetap',
                'tanggal_lahir' => '01-01-2001',
                'tempat_lahir' => 'Palembang'
            ],
            2 => (object)[
                'nama' => 'Budi',
                'program' => 'Informatika',
                'status' => 'Kontrak',
                'tanggal_lahir' => '17-08-1999',
                'tempat_lahir' => 'Metro'
            ],
        ];

        $dosen = $dosenList[$id];
        return view('TugasLaravel.dosen.detail', compact('dosen'));
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
