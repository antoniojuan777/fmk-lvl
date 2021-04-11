<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleo extends Model
{
    use HasFactory;

    protected $table = 'empleos';

    protected $fillable = [
        'nunca_empleado',
        'sin_empleo',
        'empleo',
        'parcero_id'
    ];
}
