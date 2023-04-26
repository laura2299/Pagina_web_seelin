@extends('layouts.plantillaBase')

@section('content')
<h3>Añadir imagen</h3>
    <div class="row">
        <div class="col-lg-12">
        {!! Form::open(['route'=> 'admin.imagenes.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
         
            @csrf
                <div class="form-group">
                {!! Form::label('archivo', 'archivo') !!}
                {!! Form::file('archivo',null, array('required' => 'true'),['class'=>'form-control'])!!}
                @error('archivo')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('estado', 'estado') !!}
                {!!Form :: select ('estado', ['habilitado' => 'habilitado', 'deshabilitado' => 'deshabilitado'], 'habilitado',['class'=>'form-control'])!!}
                @error('estado')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
           
            <div class="form-group">
                {!! Form::label('id_media', 'media') !!}
                {!! Form::select('id_media', $media, null, ['class'=>'form-control']) !!}
                @error('id_media')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>


            {!! Form::submit('Crear imagen', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}


           
              
        </div>
    </div>

@stop

