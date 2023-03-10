<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use App\Models\Competencia;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $competencia=Competencia::all();
        $resultado=Resultado::orderby('nombre', 'asc')->get();
        return view('resultados.indexresultados', ['mostrar'=>$resultado, 'competencias'=>$competencia]);
       
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        //$competencia=Competencia::all();
        //return view('resultados.create_resultados', ['mostrar'=>$competencia]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$nuevo=new Resultado($request->input());
        //$nuevo->saveOrFail();
       // return redirect()->route('resultados')->with(["mensaje" => "Resultado creado",]);

        $resultado = Resultado::create($request->all());

        return redirect()->route('resultados');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resultado $resultado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resultado $resultado)
    {
        //
        $codigo_resultado=$_GET["pan"];
        $resultado=Resultado::where('codigo_resultado','=',$codigo_resultado)->first();

        $competencia =Competencia::all();


        return view('resultados.editarresultados',['mostrar'=>$resultado,'competencias'=>$competencia]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resultado $codigo_resultado)
    {
        //
        $codigo_resultado->update($request->all());

        return redirect()->route('resultados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resultado $codigo_resultado)
    {
        //
        $resultado = Resultado::find($codigo_resultado)->delete();

        return redirect()->route('resultados');
    }
}
