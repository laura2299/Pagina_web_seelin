<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ArchivoController extends Controller
{
    public function __construct(){
        
        $this->middleware('can:admin.documentos.index')->only('index');
        $this->middleware('can:admin.documentos.create')->only('create');
        $this->middleware('can:admin.documentos.store')->only('store');
        $this->middleware('can:admin.documentos.edit')->only('edit');
        $this->middleware('can:admin.documentos.destroy')->only('destroy');
        $this->middleware('can:documentos')->only('buscar_doc');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = $request->input('search');

    $Archivos = DB::table('archivos')
        ->orderBy('name', 'asc')
        ->where('name', 'like', '%'.$busqueda.'%')
        ->paginate(8);

        
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
        $fecha=Carbon::now();
        $fecha_string = date_format($fecha, 'Y-m-d');
        $nombre=$fecha_string.$request->file('archivo')->getClientOriginalName();
        $miarchivo->name = $fecha_string.$request->file('archivo')->getClientOriginalName();
            $path1 = $request->file('archivo')->storeAs(
                'public/files', $nombre
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

    public function buscar_doc(Request $request){
        $roll=Auth::user()->role;
        $nom = '%'.$request->get('nombre').'%';
        $dia = $request->get('dia');
        $mes = $request->get('mes');
        $año = $request->get('año');
        if($dia==''){
            $dia='DAY(fecha) > 0 AND DAY(fecha) < 32';
        }else{
            $dia='DAY(fecha) in('.$dia.')';
        }
        if($mes==''){
            $mes='MONTH(fecha) > 0 AND MONTH(fecha) < 13';
        }else{
            $mes='MONTH(fecha) in('.$mes.')';
        }
        if($año==''){
            $año='YEAR(fecha) > 1950 AND YEAR(fecha) < 2100';
        }else{
            $año='YEAR(fecha) in('.$año.')';
        }
        $archivos=[];
        if($roll=='administrador'){
            $categoria = $request->get('categoria');
            if($categoria==''){
                $categoria="(categoria LIKE 'correspondencia' OR categoria LIKE 'archivo')";
            }else{
                $categoria="categoria LIKE '".$categoria."'";
            }
            $archivos=Archivo::where('name','LIKE',$nom)->whereRaw($dia)->whereRaw($mes)->whereRaw($año)->whereRaw($categoria)->where('estado','habilitado')->get();
        }if($roll=='user_interno'){
            $categoria = $request->get('categoria');
            if($categoria==''){
                $categoria="(categoria LIKE 'correspondencia' OR categoria LIKE 'archivo')";
            }else{
                $categoria="categoria LIKE '".$categoria."'";
            }
            $archivos=Archivo::where('name','LIKE',$nom)->whereRaw($dia)->whereRaw($mes)->whereRaw($año)->whereRaw($categoria)->where('estado','habilitado')->get();
        }if($roll=='user_externo'){
            $archivos=Archivo::where('name','LIKE',$nom)->whereRaw($dia)->whereRaw($mes)->whereRaw($año)->where('categoria','archivo')->where('estado','habilitado')->get();
        }
        return view('/pagina_principal/documentos',compact('archivos'));
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
            
            $array = explode('storage',$miarchivo->path);
        
            $arch = 'public'.$array[1];
            Storage::delete($arch);

            $fecha=Carbon::now();
        $fecha_string = date_format($fecha, 'Y-m-d');
        $nombre=$fecha_string.$request->file('archivo')->getClientOriginalName();

            $miarchivo->name = $fecha_string.$request->file('archivo')->getClientOriginalName();
            $path1 = $request->file('archivo')->storeAs(
                'public/files', $nombre
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
        $array = explode('storage',$miarchivo->path);
        
        $arch = 'public'.$array[1];
        Storage::delete($arch);
        Archivo::destroy($id);
        
        return redirect()->route('admin.documentos.index')->with('mensaje', 'El registro ha sido eliminado correctamente');
        
    }
}
