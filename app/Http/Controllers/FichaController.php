<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\Programa;
use App\Models\TipoFormacion;
use Illuminate\Http\Request;


class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ficha=Ficha::orderby('nro_ficha','asc')->get();

        $programa =Programa::all();
        $tipodeformacion=TipoFormacion::all();
        return view('fichas.indexfichas',['mostrar'=>$ficha,'programas'=>$programa,'tiposformacion'=>$tipodeformacion]);
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
        $ficha = Ficha::create($request->all());

        return redirect()->route('fichas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ficha $ficha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $nro_ficha=$_GET["pan"];
        $ficha=Ficha::where('nro_ficha','=',$nro_ficha)->first();

        $programa =Programa::all();
        $tipodeformacion=TipoFormacion::all();


        return view('fichas.editarfichas',['mostrar'=>$ficha,'programas'=>$programa,'tiposformacion'=>$tipodeformacion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , Ficha $nro_ficha)
    {
       /* $ficha = Ficha::where('nro_ficha', '=', $nro_ficha)->first();

        $ficha->jornada=$request->jornada;
        $ficha->codigo_programa=$request->codigo_programa;
        $ficha->codigo_tipo_form=$request->codigo_tipo_form;
        $ficha->estado=$request->estado;
        $ficha->cant_aprendices=$request->cant_aprendices;
        $ficha->fecha_inicio=$request->fecha_inicio;
        $ficha->fecha_fin=$request->fecha_fin;
        $ficha->save();*/
        $nro_ficha->update($request->all());

        return redirect()->route('fichas');
       // print($request);
        //$ficha->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nro_ficha)
    {

        $ficha = Ficha::find($nro_ficha)->delete();

        return redirect()->route('fichas');
    }
}
