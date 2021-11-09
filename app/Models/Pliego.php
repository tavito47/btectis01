<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pliego extends Model
{
    use HasFactory;

    protected $fillable=[
        'docente',
        'titulo',
        'materia',
        'sismat',
        'fecha',
        'semestre',
        'documento'
    ];
}
