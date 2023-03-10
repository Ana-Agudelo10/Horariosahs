<?php

namespace App\Http\Controllers;

use App\Models\TipoFormacion;
use Illuminate\Http\Request;

class TipoFormacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('welcome');
        $tipoFormacion=TipoFormacion::orderby('codigo_tipo_form','asc')->get();
        return view('tipoformacion.indextipos',['mostrar'=>$tipoFormacion]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('tipoformacion.create_tipo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$nuevo = new TipoFormacion($request->input());
        //$nuevo->saveOrFail();
        //return redirect()->route('tipos')->with(["mensaje" => "Tipo de Formacion creado",]);

        $tipoFormacion = TipoFormacion::create($request->all());

        return redirect()->route('tipos');
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoFormacion $tipoFormacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoFormacion $tipoFormacion)
    {

        $codigo_tipo_form=$_GET["pan"];
        $tipoFormacion=TipoFormacion::where('codigo_tipo_form','=',$codigo_tipo_form)->first();


        return view('tipoformacion.editartipos',['mostrar'=>$tipoFormacion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoFormacion $codigo_tipo_form)
    {
        $codigo_tipo_form->update($request->all());

        return redirect()->route('tipos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoFormacion $codigo_tipo_form)
    {
        //
        $tipoFormacion = TipoFormacion::find($codigo_tipo_form)->delete();

        return redirect()->route('tipos');
    }
}
