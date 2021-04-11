<?php

namespace App\Http\Controllers;

use App\Models\Empleo;
use App\Models\TipoDato;

use Illuminate\Http\Request;

class RegistroEmpleoController extends Controller
{
    public function datoIniciales(Request $request)
    {
        $parcero_id = $request->parcero_id;

        $empleo = Empleo::where('parcero_id', $parcero_id)->first();
        if(!isset($empleo)){
            $empleo=new Empleo();
            $empleo->parcero_id=$parcero_id;
        }

        return response()->json([
            'empleo' => $empleo,
            'empleos' => TipoDato::where('grupo','EMPLEO')->get(),
            'ok' => true
        ], 200);
    }

    public function registrar(Request $request){
        $empleo = $request->empleo;

        $mensaje='Empleo registrado correctamente.';
        if(isset($empleo['id'])){
            //modificacion
            $empleo['updated_at']=now();
            Empleo::where('id', $empleo['id'])->update($empleo);
            $mensaje = 'Empleo modificado correctamente.';
        } else {
            //registro
            $empleo = Empleo::create($empleo);
        }

        return response()->json([
            'ok' => true,
            'mensaje' => $mensaje
        ], 200);
        
    }
}
