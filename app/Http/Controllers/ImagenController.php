<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\isEmpty;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes= Imagen::orderBy('name', 'asc')->paginate(8);
        return view('dashboard/imagenes/index',compact('imagenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $media = Media::all()->pluck('name','id');
        return view('dashboard/imagenes/create',compact('media'));
        
    }

    public function crear_imagen(Media $id)
    {   
        $media = Media::findOrFail($id);
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

        $imagen = new Imagen();
        
        $request->validate([
            'archivo'=>'required|mimes:png,jpg',
            'estado'=>'required'
            
        ], [
            'archivo.required' => 'Por favor, selecciona un archivo de imagen.',
            'archivo.mimes' => 'El archivo debe ser de tipo PNG o JPG.'
        ]);
        $fecha=Carbon::now();
            $fecha_string = date_format($fecha, 'Y-m-d');
            $nombre=$fecha_string.$request->file('archivo')->getClientOriginalName();
        $imagen->name =$nombre;
        
            $path1 = $request->file('archivo')->storeAs(
                'public/files/img', $nombre
            );

        $array = explode('public',$path1);
        
        $imagen->archivo = 'storage'.$array[1];
        
       
        
        $imagen->estado= $request->estado;
        $imagen->id_media= $request->id_media;
        $imagen->save();
        $imagenes= Imagen::all();
        return view('dashboard/imagenes/index',compact('imagenes'));
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

        $imagen=Imagen::findOrFail($id);
        $media =Media::all()->pluck('name','id');
        return view('dashboard/imagenes/edit',compact('imagen','media'));
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
            'file'=>'sometimes|mimes:png,jpg',
            'estado'=>'required'
            
        ], [
            
            'file.mimes' => 'El archivo debe ser de tipo PNG o JPG.'
        ]);
        $imge=$request->file('file');
        if (!empty($imge)) {
            
            $imagen=Imagen::findOrFail($id);
            $array = explode('storage',$imagen->archivo);
            $arch = 'public'.$array[1];
            Storage::delete($arch);
            $fecha=Carbon::now();
            $fecha_string = date_format($fecha, 'Y-m-d');
            $nombre=$fecha_string.$request->file('file')->getClientOriginalName();

            $imagen->name =$nombre;

         $path1 = $request->file('file')->storeAs(
                'public/files/img', $nombre
            );

        $array = explode('public',$path1);
        
        $imagen->archivo = 'storage'.$array[1];
        
        $imagen->estado= $request->estado;
        $imagen->id_media= $request->id_media;
        $imagen->save();
        }
        else {
        $imagen2=Imagen::findOrFail($id);
        $imagen2->estado= $request->estado;
        $imagen2->id_media= $request->id_media;
        $imagen2->save();
        }
        
        $imagenes= Imagen::all();
        return view('dashboard/imagenes/index',compact('imagenes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $img=Imagen::findOrFail($id);
        $array = explode('storage',$img->archivo);
        $arch = 'public'.$array[1];
        Storage::delete($arch);
        Imagen::destroy($id);
        return redirect()->route('admin.imagenes.index')->with('mensaje', 'El registro ha sido eliminado correctamente');

    }
}
