<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    use HasFactory;
    //protected $primaryKey= '';
    //protected $keyType = 'string';
    protected $fillable =[
        'nro_ficha',
        'dia',
        'codigo_com',
        'jornada'
    ];
}
