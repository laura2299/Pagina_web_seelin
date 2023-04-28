<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajo;
use App\Models\Cliente;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiencias=Trabajo::orderBy('actividad', 'asc')->paginate(8);
        return view('dashboard/experiencias/index',compact('experiencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        

        $cliente = Cliente::all()->pluck('nombre','id');
        return view('dashboard/experiencias/create',compact('cliente'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {   
        $request->validate([
            'actividad'=>'required',
            'fecha'=>'required',
            'categoria'=> 'required',
            'estado'=>'required'
        ]);
        

        $trabajo = new Trabajo();
        $trabajo->actividad = $request->actividad;
        $trabajo->fecha_inicio = $request->fecha;
        $trabajo->categoria = $request->categoria;
        $trabajo->estado = $request->estado;
        $trabajo->id_cliente = $request->id_cliente;
        $trabajo->save();
        

        return redirect()->route('admin.experiencias.index');
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

        $trabajo=Trabajo::findOrFail($id);
        $cliente =Cliente::all()->pluck('nombre','id');
        return view('dashboard/experiencias/edit',compact('trabajo','cliente'));

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

        $request->validate([
            'actividad'=>'required',
            'fecha'=>'required',
            'categoria'=> 'required',
            'estado'=>'required'
        ]);
        
        $trabajo=Trabajo::findOrFail($id);
        
        $trabajo->actividad = $request->actividad;
        $trabajo->fecha_inicio = $request->fecha;
        $trabajo->categoria = $request->categoria;
        $trabajo->estado = $request->estado;
        $trabajo->id_cliente = $request->id_cliente;
        $trabajo->save();
        

        return redirect()->route('admin.experiencias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trabajo::destroy($id);
        
        return redirect()->route('admin.experiencias.index')->with('mensaje', 'El registro ha sido eliminado correctamente');

    }
}
