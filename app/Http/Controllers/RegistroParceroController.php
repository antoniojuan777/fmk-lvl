<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDato;
use App\Models\Parcero;
use App\Models\Asignacion;
use App\Models\AsignacionParcero;

class RegistroParceroController extends Controller
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

    public function datoIniciales(Request $request)
    {
        $parcero_id = $request->parcero_id;

        if($parcero_id){
            $parcero=Parcero::find($parcero_id);
        } else {
            $parcero=null;
        }

        return response()->json([
            'servicios' => TipoDato::where('grupo','SERVICIOS')->get(),
            'formasContactos' => TipoDato::where('grupo','FORMAS-CONTACTOS')->get(),
            'paises' => TipoDato::where('grupo','PAISES')->get(),
            'parcero' => $parcero,
            'ok' => true
        ], 200);
    }

    public function registrar(Request $request){
        $parcero = $request->parcero;

        if((!isset($parcero['nombres']) || $parcero['nombres']=='')
            && (!isset($parcero['apellidos']) || $parcero['apellidos']=='')
            && (!isset($parcero['apodo']) || $parcero['apodo']=='')){
                return response()->json([
                    'ok' => false,
                    'mensaje' => 'Debe registrar al menos el apodo.'
                ], 200);
        }

        $mensaje='Parcero registrado correctamente.';
        if(isset($parcero['id'])){
            //modificacion
            $parcero['updated_at']=now();
            Parcero::where('id', $parcero['id'])->update($parcero);
            $mensaje = 'Parcero modificado correctamente.';
        } else {
            //registro
            $asignacion['user_id_destino']=$request->user()->id;
            $asignacion['tipo_asignacion']='ASG-001'; // Por registro
            $asignacion = Asignacion::create($asignacion);
    
            $parcero = Parcero::create($parcero);
    
            $asignacionParcero['asignacion_id']=$asignacion->id;
            $asignacionParcero['parcero_id']=$parcero->id;
            $asignacionParcero['user_id']=$request->user()->id;
            $asignacionParcero['actual']=true;
    
            AsignacionParcero::create($asignacionParcero);
        }

        return response()->json([
            'ok' => true,
            'mensaje' => $mensaje,
            'parcero' => $parcero
        ], 200);
        
    }
}
