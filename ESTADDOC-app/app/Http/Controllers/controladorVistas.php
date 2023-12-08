<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controladorVistas extends Controller
{
    public function mostrarVistaconsultar()
    {
        $tabla = DB::table('doc')->get();
        return view('foliover',['documentos'=>$tabla]);
    }

    public function mostrarVistaeditar()
    {
        return view('folioedit');
    }
}
