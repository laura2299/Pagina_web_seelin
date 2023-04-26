

@extends('layouts.plantillaBase')

@section('content')
    <h3>Crear nuevo documento</h3>
    <div class="row">
        <div class="col-lg-12">      

    {!! Form::open(['route'=> 'admin.documentos.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
         
            @csrf
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


            {!! Form::submit('Crear documento', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
              
        </div>
   
    </div>
    
    

@stop

