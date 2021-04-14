<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use App\Models\Resultado;
use App\Models\TipoDato;

use Illuminate\Http\Request;

class RegistroRespuestaResultadoController extends Controller
{
    public function datoIniciales(Request $request)
    {
        $parcero_id = $request->parcero_id;

        $respuesta = Respuesta::where('parcero_id', $parcero_id)->first();
        if(!isset($respuesta)){
            $respuesta=new Respuesta();
            $respuesta->parcero_id=$parcero_id;
        }
        $resultado = Resultado::where('parcero_id', $parcero_id)->first();
        if(!isset($resultado)){
            $resultado=new Resultado();
            $resultado->parcero_id=$parcero_id;
        }

        return response()->json([
            'respuesta' => $respuesta,
            'resultado' => $resultado,
            'resultados'=> TipoDato::where('grupo','RESULTADO')->get(),
            'ok' => true
        ], 200);
    }

    public function registrar(Request $request){
        $respuesta = $request->respuesta;
        $resultado = $request->resultado;

        $mensaje='Respuesta/resultado registrados correctamente.';
        if(isset($respuesta['id'])){
            //modificacion
            $respuesta['updated_at']=now();
            Respuesta::where('id', $respuesta['id'])->update($respuesta);
            $mensaje = 'Respuesta/resultado modificados correctamente.';
        } else {
            //registro
            $respuesta = Respuesta::create($respuesta);
        }

        if(isset($resultado['id'])){
            //modificacion
            $resultado['updated_at']=now();
            Resultado::where('id', $resultado['id'])->update($resultado);
            $mensaje = 'Respuesta/resultado modificados correctamente.';
        } else {
            //registro
            $resultado = Resultado::create($resultado);
        }

        return response()->json([
            'ok' => true,
            'mensaje' => $mensaje
        ], 200);   
    }
}
