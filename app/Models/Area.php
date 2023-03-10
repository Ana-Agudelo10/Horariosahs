<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $primaryKey= 'codigo_area';
    protected $fillable =[
        'codigo_area',
        'nombre',
        'codigo_red'
    ];
}
