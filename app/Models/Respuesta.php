<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    protected $table = 'respuestas';

    protected $fillable = [
        'cita',
        'informacion',
        'consejo_orientacion',
        'canalizacion_derivacion',
        'escucha_inmediata',
        'indicaciones',
        'acompaniamiento',
        'cuidados_medicos',
        'higiene',
        'acogida',
        'otro',
        'parcero_id'
    ];
}
