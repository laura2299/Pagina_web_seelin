@extends('layouts.plantillaBase')



@section('content')
<h2>Nueva Capacitacion</h2>
    <h2>Complete los siguientes campos</h2>
    <div class="row">
       
        <div class="col-lg-12">
            {!! Form::open(['route'=> 'admin.capacitaciones.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <!--//aun falta cambiar si el pedido lo hizo el cliente o camarero-->   
            {!!Form::token()!!}
                <div class="form-group">
                    {!! Form::label('expositor', 'Nombre Expositor') !!}
                    {!!Form :: text ('expositor',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del expositor'])!!}
                    @error('expositor')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>   
                <div class="form-group">
                    {!! Form::label('titulo', 'Titulo de Capacitacion') !!}
                    {!!Form :: text ('titulo', null,['class'=>'form-control','placeholder'=>'Ingrese el titulo de la capacitacion'])!!}
                    @error('titulo')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div> 
                
                <div class="form-group">
                    {!! Form::label('archivo', 'archivo') !!}
                    {!! Form::file('archivo',null, array('required' => 'true'),['class'=>'form-control'])!!}
                    @error('archivo')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div> 
    
                <div class="form-group">
                    {!! Form::label('fecha', 'Fecha de realizacion') !!}
                    {!! Form::date('fecha', \Carbon\Carbon::now()->format('Y-m-d')) !!}
                    @error('fecha')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('estado', 'Estado') !!}
                    {!!Form :: select ('estado', ['habilitado' => 'habilitado', 'deshabilitado' => 'deshabilitado'], 'habilitado',['class'=>'form-control'])!!}
                    @error('estado')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
    
                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
    
            {!! Form::close() !!}
       
            </div>
    </div>
    
    

@stop

