@extends('layouts.plantillaBase')
@section('content')
<h2>Complete los siguientes campos</h2>
<div class="row">
   
    <div class="col-lg-12">
        {!! Form::open(['route'=> 'admin.users.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <!--//aun falta cambiar si el pedido lo hizo el cliente o camarero-->   
        {!!Form::token()!!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre del Usuario:') !!}
                {!!Form :: text ('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre completo del usuario'])!!}
                @error('nombre')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>   
            <div class="form-group">
                {!! Form::label('lastname', 'Introdusca su apellido:') !!}
                {!!Form :: text ('lastname',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre completo del usuario'])!!}
                @error('lastname')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>   
            
            
           
            <div class="form-group">
                {!! Form::label('password', 'Contraseña:') !!}
                {!! Form::password('password', ['class' => 'awesome']) !!}
                @error('password')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('tipo', 'Asignar Rol de usuario:') !!}
                {!!Form :: select ('tipo', ['user_interno' => 'user_interno', 'user_externo' => 'user_externo'], 'user_externo',['class'=>'form-control'])!!}
                @error('tipo')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
   
        </div>
</div>

    

@stop

