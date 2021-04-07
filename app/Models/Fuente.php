<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuente extends Model
{
    use HasFactory;

    protected $table = 'fuentes';

    protected $fillable = [
        'nombres_apellidos',
        'celular',
        'edad',
        'genero',
        'medio_conocimiento_org',
        'relacion_paciente',
        'parcero_id'
    ];
}
