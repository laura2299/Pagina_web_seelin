<<<<<<< HEAD
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Experiencias</h1>
@stop

=======
@extends('layouts.plantillaBase')
>>>>>>> fdf72d0fd574365fd15a7e36100e8a0f3037f019
@section('content')
    <h2>Editar Proyecto</h2>
    <h2>Complete los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
<<<<<<< HEAD
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
              

=======
            
           
            {!! Form::model($trabajo,['route'=>['admin.experiencias.update',$trabajo],'method'=>'put','enctype' => 'multipart/form-data']) !!}
  
            @csrf
            <div class="form-group">
                {!! Form::label('actividad', 'Nombre del Proyecto realizado:') !!}
                {!!Form :: text ('actividad', null,['class'=>'form-control','placeholder'=>'Ingrese el titulo de la capacitacion'])!!}
                @error('actividad')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div> 
            <div class="form-group">
                {!! Form::label('fecha', 'Fecha de Inicio') !!}
                {!! Form::date('fecha', \Carbon\Carbon::now()->format('Y-m-d')) !!}
                @error('fecha')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('categoria', 'Categoria del Proyecto') !!}
                {!!Form :: select ('categoria', ['consultoria' => 'consultoria', 'construccion' => 'construccion', 'otro' => 'otro'], 'consultoria',['class'=>'form-control'])!!}
                @error('categoria')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>    
            
            <div class="form-group">
                {!! Form::label('estado', 'Estado:') !!}
                {!!Form :: select ('estado', ['Habilitado' => 'Habilitado', 'deshabilitado' => 'deshabilitado'], 'Habilitado',['class'=>'form-control'])!!}
                @error('estado')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
           
            <div class="form-group">
                {!! Form::label('id_cliente', 'Cliente con quien trabajó') !!}
                {!! Form::select('id_cliente', $cliente, null, ['class'=>'form-control']) !!}
                @error('id_cliente')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>


            {!! Form::submit('Editar Proyecto', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
>>>>>>> fdf72d0fd574365fd15a7e36100e8a0f3037f019
              
        </div>
    </div>
    
   
    

@stop

<<<<<<< HEAD
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
=======
>>>>>>> fdf72d0fd574365fd15a7e36100e8a0f3037f019
