<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    use HasFactory;
    //protected $primaryKey= '';
    //protected $keyType = 'string';
    public $timestamps = false ;
    protected $fillable =[
        'nombre'
    ];
}