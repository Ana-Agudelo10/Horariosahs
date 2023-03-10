<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semaforo extends Model
{
    use HasFactory;
    //protected $primarykey= '';
    protected $fillable =[
        'nro_trimestre',
        'codigo_programa',
        'codigo_com',
        'codigo_resultado',
        'frecuencia_horaria'
    ];

    public function Competencia()
    {
        return $this->belongsTo(Competencia::class);
    }
}
