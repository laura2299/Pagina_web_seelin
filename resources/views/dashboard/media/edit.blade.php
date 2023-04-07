@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
    <h2>Complete los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('admin.archivosmedia.update',$media->id)}}" method="post" enctype="multipart/form-data">
                @csrf
               
        {{method_field('PATCH')}}
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="name" value="{{$media->name}}">
                <br>
                <label for="descripcion">Antigua Descripción:</label>
                <div class="card">
                    <p>{{$media->descripcion}}</p>
                </div>
                <label for="descripcion">Nueva Descripción:</label>
                <textarea id="descripcion" name="descripcion" value="{{$media->descripcion}}"></textarea>
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
                
                <input type="submit" value="validar datos" class="btn btn-warning" style="width: 150px" onclick="return confirm('Se editaran los campos, ¿esta seguro?')">
              </form>
             
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