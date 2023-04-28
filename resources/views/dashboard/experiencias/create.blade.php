@extends('layouts.plantillaBase')

@section('content')
    <h3>Crear nuevo</h3>
    <h2>Complete los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
            
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


            {!! Form::submit('Crear Proyecto', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
              
        </div>
    </div>
    
    

@stop

