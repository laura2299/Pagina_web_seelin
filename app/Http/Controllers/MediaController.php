<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias=Media::all();
        return view('dashboard/media/index',compact('medias') );
    }

    public function mostrar_qs()
    {
        $medias=Media::where('categoria','quienes_somos')->get();
        return view('/pagina_principal/quienes_somos',compact('medias') );
    }


    public function mostrar_servicios()
    {
        $medias=Media::where('categoria','servicios')->get();
        return view('/pagina_principal/servicios',compact('medias') );
    }

    public function mostrar_proyectos()
    {
        $medias=Media::where('categoria','proyectos')->get();
        return view('/pagina_principal/proyectos',compact('medias') );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/media/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Media = new Media();
        $Media->name = $request->name;
        $Media->descripcion = $request->descripcion;
        $Media->categoria = $request->categoria;
        $Media->estado = $request->estado;
        $Media->save();
        return redirect()->route('admin.archivosmedia.index');
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
        $imagenes = Imagen::where('id_media', $id);
        $media=Media::findOrFail($id);
        return view('dashboard/media/edit',compact('media','imagenes'));
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
        $Media=Media::findOrFail($id);
        $Media->name = $request->name;
        $Media->descripcion = $request->descripcion;
        $Media->categoria = $request->categoria;
        $Media->estado = $request->estado;
        $Media->save();
        return redirect()->route('admin.archivosmedia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Media::destroy($id);
        
        return redirect()->route('admin.archivosmedia.index');
    }
}
