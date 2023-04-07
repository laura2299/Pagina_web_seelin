<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Models\Media;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes= Imagen::all();
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
        
        $imagen->name =$request->file('archivo')->getClientOriginalName();
        $array = explode('public',optional($request->file('archivo'))->store('public/files'));
        $imagen->archivo ='storage'.$array[1];
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
