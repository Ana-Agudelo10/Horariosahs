<?php

namespace App\Http\Controllers;

use App\Models\Semaforo;
use App\Models\Programa;
use App\Models\Competencia;
use App\Models\Resultado;
use Illuminate\Http\Request;

class SemaforoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semaforo=Semaforo::orderby('codigo_programa','asc')->get();
        return view('semaforos.semaforo',['mostrar'=>$semaforo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programa=Programa::all();
        $competencia=Competencia::all();
        $resultado=Resultado::all();
        return view('semaforos.crearsemaforo', ['mostrar'=>$programa, 'mostrardos'=>$competencia, 'mostrartres'=>$resultado]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo = new Semaforo($request->input());
        $nuevo->saveOrFail();
        return redirect()->route('semaforos')->with(["mensaje" => "Semaforo creado",
    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Semaforo $semaforo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semaforo $semaforo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Semaforo $semaforo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semaforo $semaforo)
    {
        //
    }
}
