<?php

namespace App\Http\Controllers;

use App\Models\Parcero;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return response()->json([
            'educador' => $educador,
            'parcero'=> $parcero,
            'ok' => true
        ], 200);
    }
}
