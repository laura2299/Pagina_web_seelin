@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nuevo </h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('admin.documentos.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="archivo">Archivo:</label>
                <input type="file" name="archivo" id="archivo"><br><br>
                
                <label for="categorias">Categorías:</label>
                <br><br>
                <select id="categoria" name="categoria">
                <option value="correspondencia">Correspondencia</option>
                <option value="documento">Documento</option>
                </select>
                <br><br>
                <label for="date">Fecha yyyy/mm/dd</label>
                            <div class="input-group">
                                <input type="text" class="form-control datepicker" name="fecha">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                            <input type="submit" value="Crear archivo" class="btn btn-warning" style="width: 150px" onclick="return confirm('Se creara el nuevo archivo, ¿esta seguro?')">
           
      
    </form>
              
        </div>
    </div>
    
    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>

    <script> console.log('Hi!'); </script>
     <!-- Enlace para el calendario -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                    <script type="text/javascript">
        

                <script>
    $('.datepicker').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true
    });
</script>
@stop