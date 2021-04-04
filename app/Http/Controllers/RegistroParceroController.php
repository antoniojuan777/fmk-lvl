<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDato;
use App\Models\Parcero;

class RegistroParceroController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //
    }

    public function datoIniciales()
    {
        return response()->json([
            'servicios' => TipoDato::where('grupo','SERVICIOS')->get(),
            'formasContactos' => TipoDato::where('grupo','FORMAS-CONTACTOS')->get(),
            'paises' => TipoDato::where('grupo','PAISES')->get(),
            'ok' => true
        ], 200);
    }

    public function registrar(Request $request){
        $parcero = $request->parcero;

        $parcero = Parcero::create($parcero);

        return response()->json([
            'ok' => true,
            'mensaje' => 'Parcero registrado correctamente.',
            'parcero' => $parcero
        ], 200);
        
    }
}
