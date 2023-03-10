<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
    
    protected $primarykey= 'codigo_programa';

    protected $fillable =[
        'codigo_programa',
        'nombre',
        'version_programa',
        'nivel_formacion',
        'codigo_area'
    ];
}
