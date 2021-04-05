<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionParcero extends Model
{
    use HasFactory;

    protected $table = 'asignaciones_parceros';

    protected $fillable = [
        'asignacion_id',
        'parcero_id',
        'user_id',
        'actual'
    ];
}
