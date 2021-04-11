<?php

namespace App\Http\Controllers;

use App\Models\Condicion;

use Illuminate\Http\Request;

class RegistroCondicionController extends Controller
{
    public function datoIniciales(Request $request)
    {
        $parcero_id = $request->parcero_id;

        $condicion = Condicion::where('parcero_id', $parcero_id)->first();
        if(!isset($condicion)){
            $condicion=new Condicion();
            $condicion->parcero_id=$parcero_id;
        }

        return response()->json([
            'condicion' => $condicion,
            'ok' => true
        ], 200);
    }

    public function registrar(Request $request){
        $condicion = $request->condicion;

        $mensaje='Condiciones registradas correctamente.';
        if(isset($condicion['id'])){
            //modificacion
            $condicion['updated_at']=now();
            Condicion::where('id', $condicion['id'])->update($condicion);
            $mensaje = 'Condiciones modificadas correctamente.';
        } else {
            //registro
            $condicion = Condicion::create($condicion);
        }

        return response()->json([
            'ok' => true,
            'mensaje' => $mensaje
        ], 200);   
    }
}
