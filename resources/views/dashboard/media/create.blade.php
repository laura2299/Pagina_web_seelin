@extends('layouts.plantillaBase')
@section('content')
    <h3>Crear nuevo </h3>
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
                {!!Form :: select ('categoria', ['servicios' => 'servicios','quienes_somos' => 'quienes_somos','proyectos' => 'proyectos'], 'null',['class'=>'form-control'])!!}
                @error('categoria')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            
              <div class="form-group">
                  {!! Form::label('estado', 'Estado') !!}
                  {!!Form :: select ('estado', ['Habilitado' => 'Habilitado', 'deshabilitado' => 'deshabilitado'], 'deshabilitado',['class'=>'form-control'])!!}
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

