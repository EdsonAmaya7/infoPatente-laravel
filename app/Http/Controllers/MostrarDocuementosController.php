<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MostrarDocuementosController extends Controller
{
    //

    public function pdf()
    {
        //$homepage = public_path('/documentos/explicacionSeccionesPatente.docx');
        //return  response()->file($homepage, ['Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']);

        // return view('ejemplosPatentes.explicacionPatente');
        $pdf = public_path('/documentos/EdsonAmayaCv.pdf');
        return  response()->file($pdf,['Content-Type' => 'application/pdf']);

    }

    public function word()
    {
        return view('ejemplosPatentes.explicacionPatente');
    }
}
