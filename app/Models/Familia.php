<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    use HasFactory;

    protected $table = 'familias';

    protected $fillable = [
        'estado_familiar',
        'numero_matrimonio',
        'numero_esposo',
        'estructura_familiar',
        'escolaridad',
        'hijos_varones',
        'hijas_mujeres',
        'religion',
        'nombres_apellidos_apoyo',
        'celular_apoyo',
        'sabe_escribir',
        'sabe_leer',
        'sabe_sumar',
        'sabe_restar',
        'sabe_multiplicar',
        'sabe_dividir',
        'sabe_calcular_promedios',
        'sabe_calcular_porcentajes',
        'usa_computadora',
        'parcero_id'
    ];
}
