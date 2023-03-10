<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sede=Sede::orderby('nombre', 'asc')->get();
        return view('sedes.sedes', ['mostrar'=>$sede]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        
        //return view('sedes.create_sedes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $sede = Sede::create($request->all());
        return redirect()->route('sedes')->with(["mensaje" => "Sede creada",
    ]);
        /*$nuevo->nombre=$request->nombre;
        $nuevo->direccion=$request->direccion;
        $nuevo->save();*/
        /*$request->validate([
            'nombre'=>'required',
            'direccion'=>'required',
        ]);
        $campu = $request->user()->campu()->create([

            'nombre'=>$request->nombre,
            'direccion' =>$request->direccion,
        ]);
        return redirect()->route('sedes.sedes', $campu);*/
    }

    public function show(Sede $sede)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function edit(){
        // Sede::where('codigo_centro', $request->codigo)->update(['codigo_centro'=>$request->codigo_centro, 'nombre'=>$request->nombre, 'direccion'=>$request->direccion,]);
        $codigo_centro=$_GET["id"];
        $sede=Sede::where('codigo_centro','=',$codigo_centro)->first();
    
        return view('sedes.edit_sedes', ['mostrar'=>$sede]);
    }

    public function update(Request $request, Sede $codigo_centro){
        
        /*$request->validate([
            'nombre'=>'required|unique:campu,nombre,'.$codigo_centro->id,
            'direccion'=>'required',
        ]);

        $codigo_centro -> update([
            'nombre'=>$request->nombre,
            'direccion' =>$request->direccion,
        ]);*/
        $codigo_centro->update($request->all());
        return redirect()->route('sedes');
    }

    public function destroy($codigo_centro){
        $sede=Sede::find($codigo_centro)->delete();
        return redirect()->route('sedes');
    }
}
