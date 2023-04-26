<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function mostrar()
    {
        $archivos=Archivo::all();
        return view('/pagina_principal/documentos',compact('archivos') );
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
        $request->validate([
            'archivo'=>'required|mimes:pdf,xlsx',
            'categoria'=>'required',
            'fecha'=> 'required',
            'estado'=>'required'
        ], [
            'archivo.required' => 'Por favor, selecciona un archivo de pdf o excel.',
            'archivo.mimes' => 'El archivo debe ser de tipo PDF o XLSX.'
        ]);
        
        $miarchivo = new Archivo();
        
        $miarchivo->name = $request->file('archivo')->getClientOriginalName();
            $path1 = $request->file('archivo')->storeAs(
                'public/files', $request->file('archivo')->getClientOriginalName()
            );

        $array = explode('public',$path1);
        
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
    {    $request->validate([
        'archivo'=>'sometimes|mimes:pdf,xlsx',
        'categoria'=>'required',
        'fecha'=> 'required',
        'estado'=>'required'
    ], [
        'archivo.mimes' => 'El archivo debe ser de tipo PDF o XLSX.'
    ]);
        
        $documento=$request->file('archivo');
        if (!empty($documento)) {
            #guardamos en storage
            $miarchivo=Archivo::findOrFail($id);

            $miarchivo->name = $request->file('archivo')->getClientOriginalName();
            $path1 = $request->file('archivo')->storeAs(
                'public/files', $request->file('archivo')->getClientOriginalName()
            );

        $array = explode('public',$path1);
        $miarchivo->path = 'storage'.$array[1];
        $miarchivo->format = $request->file('archivo')->getClientOriginalExtension();

        
        $miarchivo->estado=$request->estado;
        $miarchivo->fecha = $request->fecha;
        $miarchivo->save();
        }
        else {
        $archivo1=Archivo::findOrFail($id);
        $archivo1->estado=$request->estado;
        $archivo1->fecha = $request->fecha;
        $archivo1->save();
        }
        
        
        
        return redirect('administrador/documentos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $miarchivo=Archivo::findOrFail($id);
        Storage::delete('leidyPatzi_exa272(1).pdf');
        Archivo::destroy($id);
        
        return redirect()->route('admin.documentos.index')->with('mensaje', 'El registro ha sido eliminado correctamente');
        
    }
}
