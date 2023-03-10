<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    use HasFactory;
    protected $primaryKey= 'codigo_com';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable =[
        'codigo_com',
        'nombre',
        'codigo_programa'
    ];
}
