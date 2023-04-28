<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Trabajo;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Stmt\If_;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Cliente::orderBy('nombre', 'asc')->paginate(8);
        return view('dashboard/clientes/index',compact('clientes') );
    } 

    

    public function mostrar()
    {
        $clientes = Cliente::all();
        $trabajos = Trabajo::all();
        $medias=Media::where('categoria','clientes')->get();
        return view('pagina_principal/clientes',compact('clientes','trabajos','medias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/clientes/create');
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
            'nombre'=>'required|unique:clientes',
            'logo'=>'sometimes|mimes:png,jpg',
            'estado'=>'required'    
        ], [ 
            'logo.mimes' => 'El archivo debe ser de tipo PNG o JPG.',
            'nombre.unique'=> 'Ya existe un cliente con ese nombre, intente otro'
        ]);
        $logo = $request->file('logo');
        if (!empty($logo)) {
            // Validamos el campo antes de guardarlo

            $cliente1 = new Cliente();
            $cliente1->nombre =$request->nombre;
            
            //guardamos el nombre con la fecha

            
            
            $fecha=Carbon::now();
            $fecha_string = date_format($fecha, 'Y-m-d');
            $nombre=$fecha_string.$request->file('logo')->getClientOriginalName();

            $path1 = $request->file('logo')->storeAs(
                'public/files/logoCliente',$nombre
            );

        $array = explode('public',$path1);
        
        $cliente1->logo = 'storage'.$array[1];
            $cliente1->estado= $request->estado;
            
            $cliente1->save();   
        }
        else {
            $cliente = new Cliente();
            $cliente->logo=null;
            $cliente->nombre =$request->nombre;
            $cliente->estado= $request->estado;
            
            $cliente->save();
        }
        
        $clientes=Cliente::all();
        return view('dashboard/clientes/index',compact('clientes'));
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
        $cliente=Cliente::findOrFail($id);
        return view('dashboard/clientes/edit',compact('cliente'));
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
        $cliente=Cliente::findOrFail($id);

        $request->validate([
            'logo'=>'mimes:png,jpg',
            'estado'=>'required'
            
        ], [
            
            'logo.mimes' => 'El archivo debe ser de tipo PNG o JPG.'
        ]);
        $logo = $request->file('logo');
        if (!empty($logo)) {
            // Validamos el campo antes de guardarlo

            $cliente1=Cliente::findOrFail($id);
            $cliente1->nombre =$request->nombre;

            //borramos el archivo que antes habia si no era null
            if ($cliente1->logo != null) {
                $array = explode('storage',$cliente1->logo);
                $arch = 'public'.$array[1];
                Storage::delete($arch);
            
            
            }
            else {
            $fecha=Carbon::now();
            $fecha_string = date_format($fecha, 'Y-m-d');
            $nombre=$fecha_string.$request->file('logo')->getClientOriginalName();
            $path1 = $request->file('logo')->storeAs(
                'public/files/logoCliente', $nombre
            );

            $array = explode('public',$path1);
            $cliente1->logo = 'storage'.$array[1];
            $cliente1->estado= $request->estado;
            $cliente1->save();

            }
            

           
        }
        else {
            $cliente=Cliente::findOrFail($id);
            $cliente->logo=null;
            $cliente->nombre =$request->nombre;
            $cliente->estado= $request->estado;
            $cliente->save();
        }
    
        
        $clientes=Cliente::all();
        return view('dashboard/clientes/index',compact('clientes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $cliente=Cliente::findOrFail($id);
        $array = explode('storage',$cliente->logo);
        $arch = 'public'.$array[1];
        Storage::delete($arch);
        Cliente::destroy($id);
        return redirect()->route('admin.clientes.index')->with('mensaje', 'El registro ha sido eliminado correctamente');
    }
}
