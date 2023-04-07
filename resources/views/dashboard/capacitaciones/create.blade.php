@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nueva capacitacion</h1>
@stop

@section('content')
    <h2>Complete los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
            
            <form action="{{route('admin.capacitaciones.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="expositor">Nombre del Expositor:</label>
                <br>
                <input type="text" id="expositor" name="expositor">
                <br>
                <label for="titulo">Nombre de la Capacitación:</label>
                <br>
                <input type="text" id="titulo" name="titulo">
                <br>
                <label for="fecha">Fecha de la Capacitacion yyyy-mm-dd:</label>
                <div class="input-group">
                    <input type="text" class="form-control datepicker" name="fecha">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>                                
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
                <input type="submit" value="Crear Capacitacion" class="btn btn-warning" style="width: 150px" onclick="return confirm('Se creara el nuevo registro, ¿esta seguro?')">

              </form>
              
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