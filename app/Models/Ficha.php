<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;
    protected $primaryKey= 'nro_ficha';
    protected $keyType = 'string';
    public $timestamps = false ;
    protected $fillable =[
        'nro_ficha',
        'jornada',
        'codigo_programa',
        'codigo_tipo_form',
        'estado',
        'cant_aprendices',
        'fecha_inicio',
        'fecha_fin'
    ];
}
