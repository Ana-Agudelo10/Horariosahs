<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pagina_principal(){
        return view('pagina_principal');
    }

    public function calendario(){
        return view('calendarios.calendario');
    }

    public function fichas(){
        return view('fichas.fichas');
    }

    public function instructores(){
        return view('instructores.instructores');
    }

    public function programas(){
        return view('programas.programas');
    }

    public function sedes(){
        return view('sedes.sedes');
    }

    public function semaforo(){
        return view('semaforo.semaforo');
    }

    public function informes(){
        return view('documentos.informes');
    }
}

