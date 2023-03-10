<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Red;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$area=Area::all();
        $area=Area::orderby('nombre', 'asc')->get();
        return view('areas.indexareas', ['mostrar'=>$area]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $red=Red::all();
        return view('areas.create_area', ['mostrar'=>$red]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo = new Area($request->input());
        $nuevo->saveOrFail();
        /*$nuevo->nombre=$request->nombre;
        $nuevo->codigo_red=$request->codigo_red;
        $nuevo->save();*/

        return redirect()->route('areas')->with(["mensaje" => "Area creada",
    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($area)
    {
        //
    }
}
