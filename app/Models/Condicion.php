<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    use HasFactory;

    protected $table = 'condiciones';

    protected $fillable = [
        'sustancias_alcohol',
        'conductas_antisociales',
        'psiquiatricas',
        'conductuales',
        'relacionales',
        'violencia_familiar',
        'violacion',
        'trabajo_sexual',
        'legal',
        'embarazo_parto',
        'enfermedades',
        'pobreza_extrema',
        'vida_calle',
        'apoyo_economico',
        'escolares',
        'exclusion_grave',
        'violencia_intracom',
        'redes_interinst',
        'crisis_psicologica',
        'capacitacion_formacion',
        'oganizacion_planeacion',
        'hiv',
        'ets',
        'aids',
        'sin_trabajo',
        'tb',
        'problemas_familiares',
        'tep_lt',
        'tep_st',
        'problemas_sexuales',
        'violacion_ninio',
        'tep_st',
        'otras_depedencias',
        'drogas_intravena',
        'otros',
        'hepatitis',
        'parcero_id'
    ];
}
