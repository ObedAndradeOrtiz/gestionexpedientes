<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedientes extends Model
{
    use HasFactory;

    protected $fillable =
    ['proceso',
     'procedimiento',
     'materia',
     'frecepcion'
    ];
}
