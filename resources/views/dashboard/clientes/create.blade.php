@extends('layouts.plantillaBase')

@section('content')
    <h2>Crear cliente</h2>
    <div class="row">
        <div class="col-lg-12">      

    {!! Form::open(['route'=> 'admin.clientes.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
         
            @csrf
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre del Cliente') !!}
                {!!Form :: text ('nombre', null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del cliente'])!!}
                @error('nombre')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div> 
                <div class="form-group">
                {!! Form::label('logo', 'Logo ') !!}
                {!! Form::file('logo',null, array('required' => 'true'),['class'=>'form-control'])!!}
                @error('logo')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('estado', 'Estado') !!}
                {!!Form :: select ('estado', ['Habilitado' => 'Habilitado', 'Deshabilitado' => 'Deshabilitado'], 'deshabilitado',['class'=>'form-control'])!!}
                @error('estado')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
           
            {!! Form::submit('Crear cliente', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
              
        </div>
   
    </div>
    
    

@stop

