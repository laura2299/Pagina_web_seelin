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
<<<<<<< HEAD
        $clientes=Cliente::all();
        return view('dashboard/experiencias/create',compact('clientes'));
=======
        $cliente = Cliente::all()->pluck('nombre','id');
        return view('dashboard/experiencias/create',compact('cliente'));
>>>>>>> fdf72d0fd574365fd15a7e36100e8a0f3037f019
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
<<<<<<< HEAD
    {
        $Trabajo = new Trabajo();
        $Trabajo->actividad = $request->actividad;
        $Trabajo->fecha_inicio = $request->fecha_inicio;
        $Trabajo->categoria = $request->categoria;
        $Trabajo->estado = $request->estado;
        $Trabajo->id_cliente = $request->id_cliente;
        $Trabajo->save();
=======
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
        
>>>>>>> fdf72d0fd574365fd15a7e36100e8a0f3037f019
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
<<<<<<< HEAD
        $trabajo = Trabajo::where('id', $id);
        $clientes=Cliente::all();
        return view('dashboard/experiencias/edit',compact('trabajo','clientes'));
=======
        $trabajo=Trabajo::findOrFail($id);
        $cliente =Cliente::all()->pluck('nombre','id');
        return view('dashboard/experiencias/edit',compact('trabajo','cliente'));
>>>>>>> fdf72d0fd574365fd15a7e36100e8a0f3037f019
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
<<<<<<< HEAD
        $experiencias=Trabajo::findOrFail($id);
        $experiencias->actividad = $request->actividad;
        $experiencias->fecha_inicio = $request->fecha;
        $experiencias->categoria = $request->categoria;
        $experiencias->estado = $request->estado;
        $experiencias->id_cliente = $request->id_cliente;
        $experiencias->save();
=======
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
        
>>>>>>> fdf72d0fd574365fd15a7e36100e8a0f3037f019
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
        
<<<<<<< HEAD
        return redirect()->route('admin.experiencias.index');
=======
        return redirect()->route('admin.experiencias.index')->with('mensaje', 'El registro ha sido eliminado correctamente');

>>>>>>> fdf72d0fd574365fd15a7e36100e8a0f3037f019
    }
}
