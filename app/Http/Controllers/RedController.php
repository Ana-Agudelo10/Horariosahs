<?php

namespace App\Http\Controllers;

use App\Models\Red;
use Illuminate\Http\Request;

class RedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $red=Red::orderby('nombre','asc')->get();
        return view('redes.index_redes',['mostrar'=>$red]);
    }
    public function create(Red $red)
    {
        return view('redes.create_red');
    }

    public function store(Request $request)
    {
        $nuevo=new Red($request->input());
        $nuevo->saveOrFail();
        /*$nuevo->codigo_red = $request->codigo_red;
        $nuevo->nombre = $request->nombre;
        $nuevo->save();*/

        /*$request->validate([
            'nombre'=>'required',
        ]);
        $campu = $request->user()->campu()->create([

            'nombre'=>$request->nombre,
        ]);*/
        return redirect()->route('redes')->with(["mensaje" => "Red creada",
    ]);
    }

    public function edit(Red $red){
        $red=Red::all();
        return view('redes.editar_redes', ['red'=>$red]);
    }

    public function update(Request $request, Red $red){
        
        /*$request->validate([
            'nombre'=>'required|unique:red,nombre,'.$red->id,
        ]);

        $red -> update([
            'nombre'=>$request->nombre,
        ]);*/
        $nuevo = Red::all();
        $input=$request->all();
        $nuevo->update($input);
        //$nuevo->fill($request->input())->saveOrFail();
        return redirect()->route('redes')->with(["mensaje" => "Red actualizada",
    ]);
    }

    public function destroy($red){
        $red->delete();
        return back();
        //return redirect()->route('redes')->with(["mensaje" => "Red deshabilitada",
    //]);
    }
}
