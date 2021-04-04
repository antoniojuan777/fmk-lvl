<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcero extends Model
{
    use HasFactory;

    protected $table = 'parceros';

    protected $fillable = [
        'fecha_contacto',
        'hora_contacto',
        'institucion',
        'servicio',
        'forma_contacto',
        'nombres',
        'apellidos',
        'apodo',
        'edad',
        'genero',
        'calle',
        'ciudad',
        'pais',
        'celular',
        'comentario'
    ];
}
