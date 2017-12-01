<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PlatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos = \App\Plato::all();
        return Response::json($platos, 200);
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
        $plato = new \App\Plato;
        $plato->nombre = $request->input('nombre');
        $plato->precio = $request->input('precio');
        $plato->porcion = $request->input('porcion');
        $plato->descripcion = $request->input('descripcion');
        // imagen es de tipo array filename, filetype, value
        $imagen = $request->input('imagen');
        $plato->imagen = "data:{$imagen['filetype']};base64,{$imagen['value']}";
        $plato->save();

        return Response::json(
            [
                'msj' => 'Plato creada correctamente',
                'data'=> $plato
            ], 201
        ); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Plato::find($id)->delete();
        return Response::json(
            [
                'msj' => 'Plato eliminado correctamente',
                'id'=> $id
            ], 200
        ); 
    }
}
