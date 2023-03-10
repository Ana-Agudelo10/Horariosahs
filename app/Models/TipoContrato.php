<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoContrato extends Model
{
    use HasFactory;
    public $timestamps = false ;
    protected $primarykey= '';
    protected $fillable =[
        'codigo_tipo_contrato',
        'nombre',
        'tiempos'

    ];
}
