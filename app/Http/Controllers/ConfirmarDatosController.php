<?php

namespace App\Http\Controllers;

use App\Notifications\DescargarAppNotification;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;

class ConfirmarDatosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuario.descargarPrograma');
    }
    public function enviarCorreo(Request $request)
    {
        $this->validate(
            $request,
            [
                'correo' =>'email'
            ]
            );

            Notification::route('mail', 'gonzalezc757@gmail.com')
            ->notify(new DescargarAppNotification($request->correo));


            return redirect()->route('download')->with('mensaje','Correo Enviado Exitosamente');
    }
}
