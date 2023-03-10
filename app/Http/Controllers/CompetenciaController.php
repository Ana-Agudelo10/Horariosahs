<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use App\Models\Resultado;
use App\Models\Programa;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competencia=Competencia::orderby('nombre', 'asc')->get();
        $programa =Programa::all();
        return view('competencias.indexcompetencias', ['mostrar'=>$competencia,'programas'=>$programa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$programa=Programa::all();
        //return view('competencias.create_com', ['mostrar'=>$programa]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $nuevo=new Competencia($request->input());
        $nuevo->saveOrFail();
        return redirect()->route('competencias')->with(["mensaje" => "Competencia creada",
    ]);
    */
        $competencia = Competencia::create($request->all());

        return redirect()->route('competencias');
    }

    /**
     * Display the specified resource.
     */
    public function show(Competencia $competencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Competencia $competencia)
    {
        $codigo_com=$_GET["pan"];
        $competencia=Competencia::where('codigo_com','=',$codigo_com)->first();

        $programa =Programa::all();

        return view('competencias.editarcompetencias',['mostrar'=>$competencia,'programas'=>$programa,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Competencia $codigo_com)
    {
        $codigo_com->update($request->all());

        return redirect()->route('competencias');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codigo_com)
    {
       // $resultado= Resultado::where('codigo_com','=',$codigo_com)->get();

        

        $competencia = Competencia::find($codigo_com)->delete();


        return redirect()->route('competencias');
    }
}
