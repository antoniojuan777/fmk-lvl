<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    use HasFactory;

    protected $table = 'peticiones';

    protected $fillable = [
        'apoyo_economico',
        'atencion_parto',
        'derivacion_canalizacion',
        'cita_coloquio',
        'consejo_orientacion',
        'servicios_legales',
        'fianzas_conmutas',
        'formacion_capacitacion',
        'guarderia_kinder',
        'hospitalizacion_medica',
        'informacion',
        'integracion_comunitaria',
        'internamiento',
        'organizacion_planeacion',
        'internamiento_forzado',
        'recuperacion_escolar',
        'sevicio_social',
        'terapia',
        'visita_familiar',
        'examenes_cuidados_med',
        'alimentacion',
        'servicio_higiene',
        'ocupacion_trabajo',
        'medicamentos',
        'burocratico',
        'otro',
        'parcero_id'
    ];
}
