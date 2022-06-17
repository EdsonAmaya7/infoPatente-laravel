<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaRequest;
use App\Models\empresa;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empresas.create');
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
        if($request->action == 'edit'){
            $empresa = empresa::findOrFail($request->id);
            $request->request->remove("id");
            $request->request->remove("action");
            $empresa->fill($request->all());
            $empresa->save();
            return;
        }

         $this->validate($request,
        [
            "nombre" => "required",
            "nombre_rl" => "required",
            "direccion1_rl" => "required",
            "direccion2_rl" => "nullable",
            "email_rl" => "required",
            "telefono" => "required",
            "nombre_sol" => "required",
            "email_sol" => "required",
            "telefono_sol" => "required",
        ]);
        
        $empresa = empresa::create([
        "nombre" => $request->nombre,
        "nombre_rl" => $request->nombre_rl,
        "direccion1_rl" => $request->direccion1_rl,
        "direccion2_rl" => $request->direccion2_rl,
        "email_rl" => $request->email_rl,
        "telefono" => $request->telefono,
        "nombre_sol" => $request->nombre_sol,
        "email_sol" => $request->email_sol,
        "telefono_sol" => $request->telefono_sol,
        ]);
        
        return redirect()->route('empresas.create')->with(['mensaje'=>'Empresa Agregada Exitosamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
        $empresa = empresa::find($id)->delete();

        return response()->json($empresa);
    }

    public function getEmpresas()
    {
        $data = empresa::all();
        return DataTables()->of($data)->make(true);
    }
}
