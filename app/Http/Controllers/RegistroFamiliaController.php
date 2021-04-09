<?php

namespace App\Http\Controllers;

use App\Models\Familia;
use App\Models\TipoDato;

use Illuminate\Http\Request;

class RegistroFamiliaController extends Controller
{
    public function datoIniciales(Request $request)
    {
        $parcero_id = $request->parcero_id;

        $familia = Familia::where('parcero_id', $parcero_id)->first();
        if(!isset($familia)){
            $familia=new Familia();
            $familia->parcero_id=$parcero_id;
        }

        return response()->json([
            'familia' => $familia,
            'estadosFamiliares' => TipoDato::where('grupo','ESTADO FAMILIAR')->get(),
            'numerosMatrimonios' => TipoDato::where('grupo','NUMERO MATRIMONIO')->get(),
            'numerosEsposos' => TipoDato::where('grupo','NUMERO ESPOSO')->get(),
            'estructurasFamiliares' => TipoDato::where('grupo','ESTRUCTURA FAMILIAR')->get(),
            'escolaridades' => TipoDato::where('grupo','ESCOLARIDAD')->get(),
            'ok' => true
        ], 200);
    }

    public function registrar(Request $request){
        $familia = $request->familia;

        $mensaje='Familia registrada correctamente.';
        if(isset($familia['id'])){
            //modificacion
            $familia['updated_at']=now();
            Familia::where('id', $familia['id'])->update($familia);
            $mensaje = 'Familia modificada correctamente.';
        } else {
            //registro
            $familia = Familia::create($familia);
        }

        return response()->json([
            'ok' => true,
            'mensaje' => $mensaje
        ], 200);
        
    }
}
