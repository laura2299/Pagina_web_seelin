@extends('layouts.plantillaBase')

@section('content')
    <h2>Editar cliente</h2>
    <div class="row">
        <div class="col-lg-12">      
        {!! Form::model($cliente,['route'=>['admin.clientes.update',$cliente],'method'=>'put','enctype' => 'multipart/form-data']) !!}
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
            <p>(No es necesario que vuelva a subir una imagen para el logo si no lo requiere)</p>

            <div class="form-group">
                {!! Form::label('estado', 'Estado') !!}
                {!!Form :: select ('estado', ['Habilitado' => 'Habilitado', 'Deshabilitado' => 'Deshabilitado'], 'deshabilitado',['class'=>'form-control'])!!}
                @error('estado')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
           
            {!! Form::submit('Editar cliente', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
              
        </div>
   
    </div>
    
    

@stop

