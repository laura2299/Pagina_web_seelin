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
            'estado'=> 'required',
            'archivo'=>'required|mimes:pdf',
        ], [
            'archivo.required' => 'Por favor, selecciona un archivo pdf.',
            'archivo.mimes' => 'El archivo debe ser de tipo PDF'
        ]
        );
        $capacitacion = new Capacitacion();
        $capacitacion->expositor = $request->expositor;
        $capacitacion->titulo = $request->titulo;
        $capacitacion->fecha=$request->fecha;
        $capacitacion->estado=$request->estado;

            $path1 = $request->file('archivo')->storeAs(
            'public/files', $request->file('archivo')->getClientOriginalName()
            );

        $array = explode('public',$path1);
        
        $capacitacion->archivo = 'storage'.$array[1];
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
        return view('dashboard/capacitaciones/edit',compact('Capacitacion'));
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
        $request->validate(
            [
                'expositor'=>'required',
                'titulo'=> 'required',
                'fecha'=>'required',
                'estado'=> 'required',
                'archivo'=>'nullable|mimes:pdf',
            ]
            );
            $arch = $request->file('archivo');
            if (!empty($arch)) {
            $Capacitacion=Capacitacion::findOrFail($id);
    
            $Capacitacion->expositor = $request->expositor;
            $Capacitacion->titulo = $request->titulo;
            $Capacitacion->fecha=$request->fecha;
            $Capacitacion->estado=$request->estado;
            $path1 = $request->file('archivo')->storeAs(
                'public/files', $request->file('archivo')->getClientOriginalName()
                );
    
            $array = explode('public',$path1);
            
            $Capacitacion->archivo = 'storage'.$array[1];
            $Capacitacion->save();
            }
            else{
            $Capacitacion1=Capacitacion::findOrFail($id);
            $Capacitacion1->expositor = $request->expositor;
            $Capacitacion1->titulo = $request->titulo;
            $Capacitacion1->fecha=$request->fecha;
            $Capacitacion1->estado=$request->estado;
            $Capacitacion1->save();
            }
        return redirect(route('admin.capacitaciones.index'));

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
        
        return redirect()->route('admin.capacitaciones.index')->with('mensaje', 'El registro ha sido eliminado correctamente');
    }
}
