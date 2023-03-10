<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Models\Ficha;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periodo=Periodo::orderby('id','asc')->get();

        $ficha =Ficha::all();
        return view('periodos.indexperiodos',['mostrar'=>$periodo,'fichas'=>$ficha]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $periodo=Periodo::create($request->all());
        return redirect()->route('periodos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periodo $periodo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periodo $periodo)
    {
        $id=$_GET["pan"];
        $periodo=Periodo::where('id','=',$id)->first();

        $ficha =Ficha::all();

        return view('periodos.editarperiodos',['mostrar'=>$periodo,'fichas'=>$ficha]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periodo $periodo)
    {
        $periodo->update($request->all());

        return redirect()->route('programas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periodo $periodo)
    {
        //
    }
}
