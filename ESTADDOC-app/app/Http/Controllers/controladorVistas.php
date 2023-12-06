<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
}
