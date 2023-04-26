<?php

namespace App\Http\Controllers;

use App\Models\Capacitacion;
use App\Models\Archivo;
use Illuminate\Http\Request;

class CapacitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $capacitaciones = Capacitacion::all();
        return view('dashboard/capacitaciones/index',compact('capacitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/capacitaciones/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
        [
            'expositor'=>'required',
            'titulo'=> 'required',
            'fecha'=>'required',
            'estado'=> 'required'
        ]
        );
        $capacitacion = new Capacitacion();
        $capacitacion->expositor = $request->expositor;
        $capacitacion->titulo = $request->titulo;
        $capacitacion->fecha=$request->fecha;
        $capacitacion->estado=$request->estado;
        $capacitacion->save();
        return redirect()->route('admin.capacitaciones.index');
    }

    public function mostrar()
    {
        $capacitaciones = Capacitacion::all();
        return view('/pagina_principal/capacitaciones',compact('capacitaciones'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Capacitacion=Capacitacion::findOrFail($id);
        return compact('Capacitacion');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Capacitacion=Capacitacion::findOrFail($id);
        $Capacitacion->expositor = $request->expositor;
        $Capacitacion->titulo = $request->titulo;
        $Capacitacion->fecha=$request->fecha;
        $Capacitacion->estado=$request->estado;
        $Capacitacion->save();
        return redirect()->route('admin.capacitaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Capacitacion::destroy($id);
        
        return redirect()->route('admin.capacitaciones.index');
    }
}
