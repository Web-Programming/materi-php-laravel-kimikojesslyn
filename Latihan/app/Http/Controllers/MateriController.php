<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index(): View {
        return view(view: 'materi.index');
    }

    public function detail($id = null){

    }
}
