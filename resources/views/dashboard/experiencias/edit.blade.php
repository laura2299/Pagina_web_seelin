@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Experiencias</h1>
@stop

@section('content')
    <h2>Editar los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
          {!! Form::model($trabajo,['route'=>['admin.experiencias.update',$trabajo],'method'=>'put']) !!}
              <div class="form-group">
                  {!! Form::label('actividad', 'Actividad') !!}
                  {!!Form :: textarea ('actividad', null,['class'=>'form-control','placeholder'=>'Ingrese la actividad'])!!}
                  @error('actividad')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
              </div>   
              <div class="form-group">
                {!! Form::label('fecha', 'Fecha Inicio') !!}
                {!!Form :: select ('fecha',null, ['class'=>'form-control'])!!}
                @error('fecha')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="form-group">
                {!! Form::label('categoria', 'Categoria') !!}
                {!!Form :: select ('categoria', ['Consultoria' => 'Consultoria', 'Construccion' => 'Construccion'], 'null',['class'=>'form-control'])!!}
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
  
              {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
  
          {!! Form::close() !!}
             
              <br>
              <div class="col-md-6" >
                <a href="{{route('admin.experiencias.index')}}"  class="btn btn-danger"  role="button" style="width: 150px">Cancelar</a>
              </div>
              <br>
              

              
        </div>
    </div>
    
   
    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
        // Función para limitar la selección a una sola opción
        function limitarSeleccion(elem) {
          var categoria = document.getElementsByName("categoria");
          for (var i = 0; i < categoria.length; i++) {
            if (categoria[i] !== elem) {
              categoria[i].checked = false;
            }
          }
        }
      </script>
@stop