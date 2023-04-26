@extends('layouts.plantillaBase')


@section('content')
    <h2>Capacitacion</h2>
    <h2>Editar los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
            {!! Form::model($Capacitacion,['route'=>['admin.capacitaciones.update',$Capacitacion],'method'=>'put']) !!}
            <!--//aun falta cambiar si el pedido lo hizo el cliente o camarero-->   
            
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
                    {!! Form::label('fecha', 'Fecha') !!}
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
    
                {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    
            {!! Form::close() !!}
            <br>
            
              <div class="col-md-6" >
                <a href="{{route('admin.capacitaciones.index')}}"  class="btn btn-danger"  role="button" style="width: 150px">Cancelar</a>
              
              </div>
              
        </div>
    </div>
    
    

@stop

