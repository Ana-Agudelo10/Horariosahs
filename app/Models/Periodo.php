<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;
    //protected $primaryKey= '';
    //protected $keyType = 'string';
    protected $fillable =[
        'nro_ficha',
        'fecha_inicio',
        'fecha_fin'
    ];
}
