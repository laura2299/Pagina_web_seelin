@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Nuevo</h1>
@stop

@section('content')
    <h2>Complete los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('admin.archivosmedia.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="name">
                <br>
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"></textarea>
                <br>
                <label for="categoria">Categoría:</label>
                <select id="categoria" name="categoria">
                  <option value="mision">Misión</option>
                  <option value="vision">Visión</option>
                  <option value="quienes_somos">Quiénes Somos</option>
                  <option value="proyectos">Proyectos</option>
                </select>
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
                <input type="submit" value="Crear Media" class="btn btn-warning" style="width: 150px" onclick="return confirm('Se creara el nuevo registro, ¿esta seguro?')">

              </form>
              
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
          var estado = document.getElementsByName("estado");
          for (var i = 0; i < estado.length; i++) {
            if (estado[i] !== elem) {
              estado[i].checked = false;
            }
          }
        }
      </script>
@stop