<?php

namespace App\Http\Controllers;

use App\Models\paginas;
use Illuminate\Http\Request;

class PaginasController extends Controller
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
        $palabra = $request->input('palabra');
        $insert = paginas::insert('insert into busquedas values (?,?,?)', $palabra, 1, 1);
        return response()->json($insert);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paginas  $paginas
     * @return \Illuminate\Http\Response
     */
    public function show(paginas $paginas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paginas  $paginas
     * @return \Illuminate\Http\Response
     */
    public function edit(paginas $paginas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\paginas  $paginas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paginas $paginas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paginas  $paginas
     * @return \Illuminate\Http\Response
     */
    public function destroy(paginas $paginas)
    {
        //
    }

    public function paginasPatenteView()
    {
        return view('patentes.paginasPatente-view');
    }
}
