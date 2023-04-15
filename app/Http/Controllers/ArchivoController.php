<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Archivos = Archivo::all();
        return view('dashboard/documentos/index',compact('Archivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/documentos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $miarchivo = new Archivo();
        $miarchivo->name = $request->file('archivo')->getClientOriginalName();
        $array = explode('public',$request->file('archivo')->store('public/files'));
        $miarchivo->path = 'storage'.$array[1];
        $miarchivo->format = $request->file('archivo')->getClientOriginalExtension();
        $miarchivo->fecha_subida= Carbon::now();
        $miarchivo->categoria = $request->categoria;
        $miarchivo->fecha = $request->fecha;
        $miarchivo->estado = $request->estado;
        $miarchivo->save();
        return redirect('administrador/documentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $archivo=Archivo::findOrFail($id);
        return view('dashboard/documentos/edit',compact('archivo'));
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
        $archivo=Archivo::findOrFail($id);
        $archivo->estado=$request->estado;
        $archivo->fecha = $request->fecha;
        $archivo->save();
        return redirect('administrador/documentos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Archivo::destroy($id);
        
        return redirect()->route('admin.documentos.index');
        
    }
}
