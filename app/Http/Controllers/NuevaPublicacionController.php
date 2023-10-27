<?php

namespace App\Http\Controllers;

use App\Models\NuevaPublicacion;
use Illuminate\Http\Request;
use App\Models\tipo_publicacion;
use App\Models\TipoMascota;

class NuevaPublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoP=tipo_publicacion::all();
        $tipoM=TipoMascota::all();
        
        return view('NuevaPublicacion',
            [
                'tipoP'=>$tipoP,
                'tipoM'=>$tipoM
            ]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NuevaPublicacion  $nuevaPublicacion
     * @return \Illuminate\Http\Response
     */
    public function show(NuevaPublicacion $nuevaPublicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NuevaPublicacion  $nuevaPublicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(NuevaPublicacion $nuevaPublicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NuevaPublicacion  $nuevaPublicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NuevaPublicacion $nuevaPublicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NuevaPublicacion  $nuevaPublicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(NuevaPublicacion $nuevaPublicacion)
    {
        //
    }
}
