<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\usuarios;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;


class UsuariosController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //actualizar los registros del usuario 
        /* por medio de table edits */
        $usuario = User::findOrFail($request->id);
        $request->request->remove("id");
        $request->request->remove("action");
        $usuario->fill($request->all());
        $usuario->save();

        return response()->json('Actualizado con exito');                                         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuarios $usuarios)
    {
        //
        dd('si llega');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
        $usuario = User::find($id)->delete();

        // return redirect()->back();
        return response()->json($usuario);
    }

    public function getUsuarios(){
        $data = User::with('empresa');
        return DataTables()->of($data)->make(true);
    }


    public function adminView()
    {
        return view('administrador.index');
    }
}
