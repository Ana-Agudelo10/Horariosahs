<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    use HasFactory;
    //protected $primaryKey= '';
    //protected $keyType = 'string';
    protected $fillable =[
        'nro_ficha',
        'codigo_com',
        'nro_documento',
        'nro_ambiente',
        'trimestre'
    ];
}
