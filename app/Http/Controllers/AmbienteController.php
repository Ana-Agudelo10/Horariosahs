<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambiente;
use App\Models\Sede;


class AmbienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $ambiente=Ambiente::orderby('nombre', 'asc')->get();
        $sedes=Sede::all();
        return view('ambientes.ambientes', ['mostrar'=>$ambiente, 'sedes'=>$sedes]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$sedes=Sede::all();
        //return view('ambientes.create_amb', ['mostrar'=>$sedes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ambiente= Ambiente::create($request->all());
        //$nuevo->saveOrFail();
        return redirect()->route('ambientes')->with(["mensaje" => "Ambiente creado",
    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ambiente $ambiente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $nro_ambiente=$_GET["id"];
        $ambiente=Ambiente::where('nro_ambiente','=',$nro_ambiente)->first();
        $sede =Sede::all();

        return view('ambientes.edit_amb',['mostrar'=>$ambiente,'sedes'=>$sede]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ambiente $nro_ambiente)
    {
        $nro_ambiente->update($request->all());

        return redirect()->route('ambientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nro_ambiente)
    {
        $ambiente = Ambiente::find($nro_ambiente)->delete();

        return redirect()->route('ambientes');
    }
}
