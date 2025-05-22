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
       
        return(view('TugasLaravel.prodi.index'));
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
        // Form Validation
        $validateData = $request->validate([
            'kode_prodi' => 'required|min:2|max:2',
            'nama' => 'required|min:5|max:25'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prodi = Prodi::find($id);
        if(!isset($prodi->id)){
            return redirect("prodi")->with("failed","Program Studi Tidak Ditemukan!")
        }
        'prodi' => $prodi
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Ambil data berdasarkan id
        $prodi = Prodi::find($id);
        if(!isset($prodi->id)){
            return redirect("prodi")->with("status","Program Studi Tidak Ditemukan!")
        }
        return view("TugasLaravel.prodi.detail",[
            'prodi' => $prodi
        ]);
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
        $prodi = Prodi::find($id);
        if(isset($prodi->id)){
            $prodi->delete();
            return redirect("prodi")->with("status","Program Studi Berhasil Dihapus!")
        }
        return redirect("prodi")-> with("failed","Program Studi Tidak Ditemukan!")
    }
}
