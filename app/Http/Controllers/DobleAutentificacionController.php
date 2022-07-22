<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DobleAutentificacionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dobleAutentificacion.index');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'codigoVerificacion' => 'required|numeric|digits_between:6,7'
            ]
        );

        if ($request->codigoVerificacion == auth()->user()->codigo_autentificacion) {
            if (auth()->user()->is_admin == 1) {

                return view('administrador.index');
            } else {

                return view('patentes.patente-view');
            }
        } else {
            return redirect()->back()->with('mensaje', 'Código de verificación erroneo');
        }
    }
}
