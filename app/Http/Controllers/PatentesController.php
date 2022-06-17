<?php

namespace App\Http\Controllers;

use App\Models\patentes;
use Illuminate\Http\Request;

class PatentesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['verified']);
    // }
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
        if($request->action == 'edit'){
            $empresa = patentes::findOrFail($request->id);
            $request->request->remove("id");
            $request->request->remove("action");
            $empresa->fill($request->all());
            $empresa->save();
            return;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\patentes  $patentes
     * @return \Illuminate\Http\Response
     */
    public function show(patentes $patentes)
    {
        //
        return view('patentes.show');
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

    public function getPatentes(){
        $data = patentes::all();
        return DataTables()->of($data)->make(true);
    }
}
