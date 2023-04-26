<<<<<<< HEAD
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nueva Experiencia</h1>
@stop
=======
@extends('layouts.plantillaBase')
>>>>>>> fdf72d0fd574365fd15a7e36100e8a0f3037f019

@section('content')
    <h3>Crear nuevo</h3>
    <h2>Complete los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
<<<<<<< HEAD
            <form action="{{route('admin.experiencias.store')}}" method="post">
                @csrf
                <label for="actividad">Nombre del Actividad:</label>
                <br>
                <input type="text" id="actividad" name="actividad">
                <br>
                <label for="categoria">Nombre de la Categoria:</label>
                <br>
                <input type="text" id="categoria" name="categoria">
                <br>
                <label for="id_cliente">Id Cliente:</label>
                <br>
                <input list="clientes" id="id_cliente" name="id_cliente">
                <datalist name="clientes" id="clientes">
                @foreach ($clientes as $item)
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                @endforeach  
                </datalist>
                <br>
                <label for="fecha">Fecha Inicio:</label>
                <br>
                <input type="date" id="fecha" name="fecha">                     
                <br>
                <br>
                <label for="estado">Estado:</label><br>
  
                <label class="custom-checkbox">
                <input type="checkbox" name="estado" value="habilitado" onclick="limitarSeleccion(this)">
                    <span class="checkmark"></span>
                    habilitado
                </label>
                <label class="custom-checkbox">
                    <input type="checkbox" name="estado" value="deshabilitado" onclick="limitarSeleccion(this)">
                    <span class="checkmark"></span>
                    deshabilitado
                </label>
                <br>
                
                <br>
                <input type="submit" value="Crear Experiencia" class="btn btn-warning" style="width: 150px" onclick="return confirm('Se creara el nuevo registro, ¿esta seguro?')">
=======
            
            {!! Form::open(['route'=>'admin.experiencias.store', 'method' => 'POST']) !!}
         
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
>>>>>>> fdf72d0fd574365fd15a7e36100e8a0f3037f019


            {!! Form::submit('Crear Proyecto', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
              
        </div>
    </div>
    
    

@stop

<<<<<<< HEAD
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- Minified Bootstrap CSS -->

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
=======
>>>>>>> fdf72d0fd574365fd15a7e36100e8a0f3037f019
