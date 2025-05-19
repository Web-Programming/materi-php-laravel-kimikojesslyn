<?php

namespace App\Http\Controllers\TugasLaravelController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Mahasiswa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('TugasLaravel.mahasiswa.index');
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
        $mahasiswaList = [
            1 => (object)[
                'nama' => 'Jesslyn',
                'program' => 'Sistem Informasi',
                'status' => 'Aktif',
                'tanggal_lahir' => '01-07-2006',
                'tempat_lahir' => 'Palembang'
            ],
            2 => (object)[
                'nama' => 'Kimiko',
                'program' => 'Teknik Elektro',
                'status' => 'Cuti',
                'tanggal_lahir' => '18-08-2006',
                'tempat_lahir' => 'Metro'
            ],
           
        ];
        
        $mahasiswa = $mahasiswaList[$id];
        return view('TugasLaravel.mahasiswa.detail', compact('mahasiswa'));
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
