<?php

namespace App\Http\Controllers;

use App\Models\Parcero;
use App\Models\Fuente;
use App\Models\Familia;
use App\Models\Empleo;
use App\Models\Condicion;
use App\Models\Peticion;
use App\Models\Respuesta;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DetalleParceroController extends Controller
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

    public function datosIniciales(Request $request)
    {
        $parcero_id = $request->parcero_id;

        $parcero = Parcero::find($parcero_id);
        $educador = DB::table('users')
            ->join('asignaciones_parceros', 'users.id', '=', 'asignaciones_parceros.user_id')
            ->where('asignaciones_parceros.actual', true)
            ->where('asignaciones_parceros.parcero_id', '=', $parcero_id)
            ->select('users.*')
            ->first();

        $fuente = Fuente::where('parcero_id', $parcero_id)->first();
        $familia = Familia::where('parcero_id', $parcero_id)->first();
        $empleo = Empleo::where('parcero_id', $parcero_id)->first();
        $condicion = Condicion::where('parcero_id', $parcero_id)->first();
        $peticion = Peticion::where('parcero_id', $parcero_id)->first();
        $respuesta = Respuesta::where('parcero_id', $parcero_id)->first();
        
        return response()->json([
            'educador' => $educador,
            'parcero'=> $parcero,
            'fuente'=>$fuente,
            'familia'=>$familia,
            'empleo'=>$empleo,
            'condicion'=>$condicion,
            'peticion'=>$peticion,
            'respuesta'=>$respuesta,
            'ok' => true
        ], 200);
    }
}
