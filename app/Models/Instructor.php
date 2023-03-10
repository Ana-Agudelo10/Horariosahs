<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $primarykey = 'nro_documento';
    public $timestamps = false ;
    protected $fillable = [
        'nro_documento',
        'tipo_documento',
        'nombre',
        'apellido',
        'telefono',
        'email',
        'estado',
        'tiempos',
        'codigo_red',
        'codigo_area'
    ];
}