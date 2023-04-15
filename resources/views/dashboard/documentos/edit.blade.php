@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Documento</h1>
@stop

@section('content')
    
{!! Form::model($archivo,['route'=>['admin.documentos.update',$archivo],'method'=>'put']) !!}
    
           
                <div class="form-group">
                {!! Form::label('archivo', 'archivo') !!}
                {!! Form::file('archivo',null, array('required' => 'true'),['class'=>'form-control'])!!}
                @error('archivo')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('categoria', 'Categoria') !!}
                {!!Form :: select ('categoria', ['correspondencia' => 'correspondencia', 'archivo' => 'archivo'], 'correspondencia',['class'=>'form-control'])!!}
                @error('categoria')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('estado', 'estado') !!}
                {!!Form :: select ('estado', ['habilitado' => 'habilitado', 'deshabilitado' => 'deshabilitado'], 'habilitado',['class'=>'form-control'])!!}
                @error('estado')
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


            {!! Form::submit('Editar documento', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    
    

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