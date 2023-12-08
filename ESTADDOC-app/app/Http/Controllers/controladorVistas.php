<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controladorVistas extends Controller
{
    public function mostrarVistaconsultar()
    {
        return view('foliover');
    }

    public function mostrarVistaeditar()
    {
        return view('folioedit');
    }


    public function index(){
        $posts = DB::table('posts')->get();

        return view('consultarr',['posts' => $posts]);
    }
}
