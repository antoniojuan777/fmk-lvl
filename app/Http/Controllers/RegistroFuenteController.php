<?php

namespace App\Http\Controllers;

use App\Models\Fuente;
use App\Models\TipoDato;

use Illuminate\Http\Request;

class RegistroFuenteController extends Controller
{
    public function datoIniciales(Request $request)
    {
        $parcero_id = $request->parcero_id;

        $fuente = Fuente::where('parcero_id', $parcero_id)->first();
        if(!isset($fuente)){
            $fuente=new Fuente();
            $fuente->parcero_id=$parcero_id;
        }

        return response()->json([
            'fuente' => $fuente,
            'mediosConocimientosOrgs' => TipoDato::where('grupo','MEDIO CONOCIMIENTO ORGANIZACION')->get(),
            'relacionesPacientes' => TipoDato::where('grupo','RELACION PACIENTE')->get(),
            'ok' => true
        ], 200);
    }

    public function registrar(Request $request){
        $fuente = $request->fuente;

        $mensaje='Fuente registrada correctamente.';
        if(isset($fuente['id'])){
            //modificacion
            $fuente['updated_at']=now();
            Fuente::where('id', $fuente['id'])->update($fuente);
            $mensaje = 'Fuente modificada correctamente.';
        } else {
            //registro
            $fuente = Fuente::create($fuente);
        }

        return response()->json([
            'ok' => true,
            'mensaje' => $mensaje
        ], 200);
        
    }
}
