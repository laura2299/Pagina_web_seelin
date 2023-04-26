@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Archivos Media</h1>
@stop

@section('content')
    <h2>Editar los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
          {!! Form::model($media,['route'=>['admin.archivosmedia.update',$media],'method'=>'put']) !!}

          
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
             
              <br>
              <div class="col-md-6" >
                <a href="{{route('admin.archivosmedia.index')}}"  class="btn btn-danger"  role="button" style="width: 150px">Cancelar</a>
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