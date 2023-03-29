@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>vista del edit documento</p>
    <form action="{{route('admin.documentos.update',$archivo->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        <br><br>
                <h5>Nombre del archivo: {{$archivo->name}}</h5>
                <br>
                <label for="date">Fecha yyyy/mm/dd</label>
                            <div class="input-group">
                                <input type="text" class="form-control datepicker" name="fecha" value="{{$archivo->fecha}}">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
           
        <label for="estado">Estado:</label>
        <select id="estado" name="estado">
          <option value="habilitado">Habilitado</option>
          <option value="deshabilitado">Deshabilitado</option>
        </select>
        <br>
        <input type="submit" value="validar datos" class="btn btn-warning" style="width: 150px" onclick="return confirm('Se editaran los campos, ¿esta seguro?')">

      </form>
      
    
    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
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