<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Models\Area;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programa=Programa::orderby('nombre','asc')->get();
        return view('programas.index_programas',['mostrar'=>$programa]);
    }

    public function create(Programa $programa){
        $area=Area::all();
        return view('programas.create_programa', ['mostrar'=>$area]);
    }

    public function store(Request $request){

        $request->validate([
            'codigo_programa'=>'required | unique:programas, codigo_programa',
            'nombre'=>'required',
            'version_programa'=>'required',
            'nivel_formacion'=>'required',
            'codigo_area'=>'required'

        ]);
        
        $programa = $request->user()->posts()->create([
            'codigo_programa'=>$request->codigo_programa,
            'nombre' =>$request->nombre,
            'version_programa' =>$request->version_programa,
            'nivel_formacion' =>$request->nivel_formacion,
            'codigo_area' =>$request->codigo_area
        ]);
        return redirect()->route('create_programa')->with(["mensaje" => "Programa creado",
    ]);
    }

    public function edit(){

        $codigo_programa=$_GET["pan"];
        
        return view('programas.editar', ['programas'=>$programa]);
    }

    public function update(Request $request, Programa $programa){
        
        $request->validate([
            'codigo_programa'=>'required | unique:programas, codigo_programa',
            'nombre'=>'required',
            'version_programa'=>'required',
            'nivel_formacion'=>'required',
            'codigo_area'=>'required'
            
        ]);

        $programa -> update([
            'codigo_programa'=>$request->codigo_programa,
            'nombre' =>$request->nombre,
            'version_programa' =>$request->version_programa,
            'nivel_formacion' =>$request->nivel_formacion,
            'codigo_area' =>$request->codigo_area
        ]);
        return redirect()->route('programas.edit', $programa);
    }

    public function destroy(Programa $programa){
        $programa->delete();
        return back();
    }
}
