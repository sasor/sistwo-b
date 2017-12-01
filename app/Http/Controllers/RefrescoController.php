<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class RefrescoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refrescos = \App\Refresco::all();
        $data = [];
        foreach ($refrescos as $refresco) {
            $categoria_nombre = $refresco->categoria_refresco->nombre;
            $tipo_nombre = $refresco->tipo_refresco->nombre;
            array_push($data, [
                'id' => $refresco->id,
                'nombre' => $tipo_nombre,
                'precio' => $refresco->precio,
                'cantidad' => $refresco->cantidad_unidades,
                'categoria' => $categoria_nombre
            ]);
        }
        /*$out = DB::select("select categoria, array_agg(tipos) from (select id,
categoria_refresco_id, tipo_refresco_id from refresco order by tipo_refresco_id)
as tab (id,categoria,tipos) group by categoria order by categoria");*/
        /*$out = DB::select("select categoria_refresco_id as categoria,
string_to_array(string_agg(tipo_refresco_id::text, ','), ',') as
tipos from refresco group by categoria_refresco_id order by
categoria_refresco_id");*/
        return Response::json($data, 200);
        
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
        $refresco = new \App\Refresco;
        $refresco->categoria_refresco_id = $request->input('categoria_refresco_id');
        $refresco->tipo_refresco_id = $request->input('tipo_refresco_id');
        $refresco->precio = $request->input('precio');
        $refresco->cantidad_unidades = $request->input('cantidad_unidades');
        $refresco->save();

        return Response::json(
            [
                'msj' => 'Refresco creado exitosamente',
                'data'=> $refresco
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
        \App\Refresco::find($id)->delete();
        return Response::json(
            [
                'msj' => 'Refresco eliminado correctamente',
                'id'=> $id
            ], 200
        ); 
    }
}
