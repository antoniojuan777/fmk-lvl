<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
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
        $user_id = $request->user()->id;

        $parceros = DB::table('parceros')
            ->join('asignaciones_parceros', 'parceros.id', '=', 'asignaciones_parceros.parcero_id')
            ->where('asignaciones_parceros.user_id', '=', $user_id)
            ->where('asignaciones_parceros.actual', true)
            ->select('parceros.*')
            ->orderByDesc('parceros.updated_at')
            ->limit(10)
            ->get();

        return response()->json([
            'parceros' => $parceros,
            'ok' => true
        ], 200);
    }
}
