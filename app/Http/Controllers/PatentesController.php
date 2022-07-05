<?php

namespace App\Http\Controllers;

use App\Models\patentes;
use App\Models\User;
use Illuminate\Http\Request;

class PatentesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('patentes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('patentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->action == 'edit') {
            $empresa = patentes::findOrFail($request->id);
            $request->request->remove("id");
            $request->request->remove("action");
            $empresa->fill($request->all());
            $empresa->save();
            return;
        }

        $this->validate($request, [
            "nombre" => "required | max: 20",
            // "numero_autores" => "required",
            "pais_presentacion" => "required",
            "entidad_pequenia" => "required",
            // "representantes_id" => "required",
            "tipo" => "required",
            "aplicacion" => "required",
            // "cecionario_id" => "required",
            // "tarifa_descuento" => "required",
        ]);

        // dd($request->all());

       $patente= patentes::create([
            "nombre" => $request->nombre,
            // "numero_autores" => $request->numero_autores,
            "pais_presentacion" => $request->pais_presentacion,
            "entidad_pequenia" => $request->entidad_pequenia,
            // "representantes_id" => $request->representantes_id,
            "tipo" => $request->tipo,
            "aplicacion" => $request->aplicacion,
            // "cecionario_id" => $request->cecionario_id,
            "email_registro" => auth()->user()->email,
            "autorizacion" => "No",
            "user_id" => auth()->user()->id
        ]);


        return redirect()->back()->with(['mensaje'=>'Patente agregada con exito']);
    }

    /**ojoojo
     * Display the specified resource.
     *
     * @param  \App\Models\patentes  $patentes
     * @return \Illuminate\Http\Response
     */
    public function show(patentes $patentes)
    {
        //
        $patente = patentes::all()->where('user_id', auth()->user()->id);

        return view('patentes.show', compact('patente'));
        // return view('patentes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\patentes  $patentes
     * @return \Illuminate\Http\Response
     */
    public function edit(patentes $patentes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\patentes  $patentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, patentes $patentes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\patentes  $patentes
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
        $patente = patentes::find($id)->delete();
    }

    public function patentesView()
    {
        return view('patentes.patente-view');
    }

    public function getPatentes()
    {
        $id = auth()->id();
        $isAdmin = User::where('id', $id)->get();
        if ($isAdmin[0]['is_admin'] == 0) {
            $data = patentes::all()->where('user_id', $id);
            return DataTables()->of($data)->make(true);
        }
        $data = patentes::all();
        return DataTables()->of($data)->make(true);
    }

    public function getUltimaPatente()
    {
        $patente = patentes::latest('id')->where('user_id', auth()->user()->id)->first();
        // $patente = patentes::latest('id')->where('user_id', 2)->first();

        // dd($patente);

        return view('patentes.show', compact('patente'));
        // return $patente;
    }
}
