<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pol extends Model
{
    use HasFactory;
    protected $table = 'pol';
    protected $fillable = [
        'nombre',
        'velocidad',
        'posicion',
        'fisico',
        'ritmo',
        'regate',
    ];
    protected $hidden = [];
}
