<?php

namespace App\Http\Controllers;

use App\Models\Fuente;

use Illuminate\Http\Request;

class RegistroFuenteController extends Controller
{
    public function datoIniciales(Request $request)
    {
        $parcero_id = $request->parcero_id;

        $fuente = Fuente::where('parcero_id', $parcero_id)->first();
        if(!isset($fuente)){
            $fuente=new Fuente();
        }

        return response()->json([
            'fuente' => $fuente,
            'ok' => true
        ], 200);
    }
}
