@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Añadir imagen </h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
        {!! Form::open(['route'=> 'admin.imagenes.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <!--//aun falta cambiar si el pedido lo hizo el cliente o camarero-->   
            @@csrf
                <div class="form-group">
                {!! Form::label('archivo', 'archivo') !!}
                {!! Form::file('archivo',null, array('required' => 'true'))!!}
                @error('archivo')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('estado', 'estado') !!}
                {!!Form :: select ('estado', ['habilitado' => 'habilitado', 'deshabilitado' => 'deshabilitado'], 'habilitado')!!}
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
     <!-- Enlace para el calendario -->

@stop