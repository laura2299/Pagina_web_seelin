@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nueva Experiencia</h1>
@stop

@section('content')
    <h2>Complete los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
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

              </form>
              
        </div>
    </div>
    
    

@stop

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