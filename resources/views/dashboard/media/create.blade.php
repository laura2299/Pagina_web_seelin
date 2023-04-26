@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Nuevo</h1>
@stop

@section('content')
    <h2>Complete los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
          {!! Form::open(['route'=> 'admin.archivosmedia.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          <!--//aun falta cambiar si el pedido lo hizo el cliente o camarero-->   
          {!!Form::token()!!}
              <div class="form-group">
                  {!! Form::label('name', 'Nombre') !!}
                  {!!Form :: text ('name', null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del texto'])!!}
                  @error('name')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
              </div>   
              <div class="form-group">
                  {!! Form::label('descripcion', 'Descripcion') !!}
                  {!!Form :: textarea ('descripcion', null,['class'=>'form-control','placeholder'=>'Ingrese el contenido del texto'])!!}
                  @error('descripcion')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
              </div> 
              <div class="form-group">
                {!! Form::label('categoria', 'Categoria') !!}
                {!!Form :: select ('categoria', ['Mision' => 'Mision', 'Vision' => 'Vision','Quienes Somos' => 'Quienes Somos','Proyectos' => 'Proyectos'], 'null',['class'=>'form-control'])!!}
                @error('categoria')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            
              <div class="form-group">
                  {!! Form::label('estado', 'Estado') !!}
                  {!!Form :: select ('estado', ['habilitado' => 'habilitado', 'deshabilitado' => 'deshabilitado'], 'deshabilitado',['class'=>'form-control'])!!}
                  @error('estado')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
              </div>
  
              {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
  
          {!! Form::close() !!}
  
  
             
                
          </div>
  </div>
    </div>
    
  
    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    
@stop