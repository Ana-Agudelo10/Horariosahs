<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;
    protected $primarykey= 'codigo_resultado';
    protected $fillable =[
        'codigo_resultado',
        'nombre',
        'codigo_com',
    ];

    public function Competencia()
    {
        return $this->belongsTo(Competencia::class);
    }

}