<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Red;
use App\Models\Area;
use App\Models\Ficha;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $instructor=instructor::orderby('nro_documento','asc')->get();

        $red=Red::all();
        $area=Area::all();
        return view('instructores.indexinstructores',['mostrar'=>$instructor,'reds'=>$red,'areas'=>$area]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    //eliminar codigo red en instructores
    {
        $instructor = instructor::create($request->all());

        return redirect()->route('instructores');

    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        //
        $nro_documento=$_GET["pan"];
        $instructor=instructor::where('nro_documento','=',$nro_documento)->first();

        $red =red::all();
        $area=Area::all();


        return view('instructores.editarinstructores',['mostrar'=>$instructor,'reds'=>$red,'areas'=>$area]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructor $instructor)
    {
        $instructor->update($request->all());

        return redirect()->route('instructores');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($instructor)
    {
        $instructor = instructor::find($instructor)->delete();

        return redirect()->route('instructores');
    }
}
