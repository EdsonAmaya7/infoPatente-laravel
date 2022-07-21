<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Notifications\twoFALogin;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class dobleAutentificacion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //obtengo la hora del momento al iniciar sesion
        $date  =  Carbon::now();
        $date = str_replace(':','',$date);
        //creo un codigo entero unico
        $codigoVerificacion = substr($date,11);

        // busco el usuario autentificado y le actualizo su codigo
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->codigo_autentificacion = $codigoVerificacion;
        $user->save();


        //se lo mando al correo
        auth()->user()->notify(new twoFALogin($codigoVerificacion));
        return $next($request);
    }
}
