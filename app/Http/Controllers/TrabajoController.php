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
        $experiencias=Trabajo::all();
        return view('dashboard/experiencias/index',compact('experiencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=Cliente::all();
        return view('dashboard/experiencias/create',compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Trabajo = new Trabajo();
        $Trabajo->actividad = $request->actividad;
        $Trabajo->fecha_inicio = $request->fecha_inicio;
        $Trabajo->categoria = $request->categoria;
        $Trabajo->estado = $request->estado;
        $Trabajo->id_cliente = $request->id_cliente;
        $Trabajo->save();
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
        $trabajo = Trabajo::where('id', $id);
        $clientes=Cliente::all();
        return view('dashboard/experiencias/edit',compact('trabajo','clientes'));
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
        $experiencias=Trabajo::findOrFail($id);
        $experiencias->actividad = $request->actividad;
        $experiencias->fecha_inicio = $request->fecha;
        $experiencias->categoria = $request->categoria;
        $experiencias->estado = $request->estado;
        $experiencias->id_cliente = $request->id_cliente;
        $experiencias->save();
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
        
        return redirect()->route('admin.experiencias.index');
    }
}
