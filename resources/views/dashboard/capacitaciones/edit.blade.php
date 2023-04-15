@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nueva capacitacion</h1>
@stop

@section('content')
    <h2>Editar los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
            {!! Form::model($Capacitacion,['route'=>['admin.capacitaciones.update',$Capacitacion],'method'=>'put']) !!}
            <!--//aun falta cambiar si el pedido lo hizo el cliente o camarero-->   
            
                <div class="form-group">
                    {!! Form::label('expositor', 'Nombre Expositor') !!}
                    {!!Form :: text ('expositor',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del expositor'])!!}
                    @error('expositor')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>   
                <div class="form-group">
                    {!! Form::label('titulo', 'Titulo de Capacitacion') !!}
                    {!!Form :: text ('titulo', null,['class'=>'form-control','placeholder'=>'Ingrese el titulo de la capacitacion'])!!}
                    @error('titulo')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div> 
                
               
                <div class="form-group">
                    {!! Form::label('fecha', 'Fecha') !!}
                    {!! Form::date('fecha', \Carbon\Carbon::now()->format('Y-m-d')) !!}
                    @error('fecha')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('estado', 'Estado') !!}
                    {!!Form :: select ('estado', ['habilitado' => 'habilitado', 'deshabilitado' => 'deshabilitado'], 'habilitado',['class'=>'form-control'])!!}
                    @error('estado')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
    
                {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    
            {!! Form::close() !!}
            <br>
            
              <div class="col-md-6" >
                <a href="{{route('admin.capacitaciones.index')}}"  class="btn btn-danger"  role="button" style="width: 150px">Cancelar</a>
              
              </div>
              
        </div>
    </div>
    
    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- Minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
@stop

@section('js')
  
<script>
    $('.datepicker').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true
    });
</script>
<script>
    // Función para limitar la selección a una sola opción
    function limitarSeleccion(elem) {
      var estado = document.getElementsByName("estado");
      for (var i = 0; i < estado.length; i++) {
        if (estado[i] !== elem) {
          estado[i].checked = false;
        }
      }
    }
  </script>
    <script> console.log('Hi!'); </script>
    <!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Minified Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
@stop