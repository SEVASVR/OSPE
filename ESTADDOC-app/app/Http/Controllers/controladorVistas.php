<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Document;

class controladorVistas extends Controller
{
    public function mostrarVistaconsultar()
    {
        $tabla = DB::table('doc')->get();
        return view('foliover',['documentos'=>$tabla]);
    }

    public function verSolouno($documento){
        $documentos = Document::find($documento);
        return view('consu',['documentos'=> $documentos]);
    }

    public function buscar(Request $request){
        $documento = $request->input('documento');
        $resultados = Document::where('documento',$documento)->get();

        return view('busquer',['resultados'=>$resultados]);
    }

    public function mostrarVistaeditar()
    {
        return view('folioedit');
    }
}
