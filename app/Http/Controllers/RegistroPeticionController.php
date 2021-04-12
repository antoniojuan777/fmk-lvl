<?php

namespace App\Http\Controllers;

use App\Models\Peticion;

use Illuminate\Http\Request;

class RegistroPeticionController extends Controller
{
    public function datoIniciales(Request $request)
    {
        $parcero_id = $request->parcero_id;

        $peticion = Peticion::where('parcero_id', $parcero_id)->first();
        if(!isset($peticion)){
            $peticion=new Peticion();
            $peticion->parcero_id=$parcero_id;
        }

        return response()->json([
            'peticion' => $peticion,
            'ok' => true
        ], 200);
    }

    public function registrar(Request $request){
        $peticion = $request->peticion;

        $mensaje='Peticiones registradas correctamente.';
        if(isset($peticion['id'])){
            //modificacion
            $peticion['updated_at']=now();
            Peticion::where('id', $peticion['id'])->update($peticion);
            $mensaje = 'Peticiones modificadas correctamente.';
        } else {
            //registro
            $peticion = Peticion::create($peticion);
        }

        return response()->json([
            'ok' => true,
            'mensaje' => $mensaje
        ], 200);   
    }
}
