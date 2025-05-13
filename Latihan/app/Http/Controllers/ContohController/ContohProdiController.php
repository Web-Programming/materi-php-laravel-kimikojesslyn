<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listprodi = Prodi::all(); //SELECT * FROM prodis
        // $listprodi = DB::table("prodis")-> get();
       return view("prodi.index", ['listprodi'=>$listprodi]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        echo "Ini halaman create prodi";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Prodi::create([
            'nama' => $data('nama'),
            'deskripsi' => $data('deskripsi'),
        ]);

        /* Cara 2
        Prodi::create([
            'nama' => $data('nama'),
            'deskripsi' => $data('deskripsi'),
        ]); */

        /* Cara 3
        $newprodi = new Prodi();
        $newprodi -> nama = $data['nama'];
        $newprodi -> deskripsi = $data['deskripsi']; */
        
        return redirect('prodi')->with('status', 'Program Studi Berhasil Disimpan');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        echo "Ini detail prodi dengan id ".$id;
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
