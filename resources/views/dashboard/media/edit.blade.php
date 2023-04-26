@extends('layouts.plantillaBase')

@section('content')
    <h3>Editar archivos media</h3>
    <h2>Complete los siguientes campos</h2>
    <div class="row">
        <div class="col-lg-12">
          {!! Form::model($media,['route'=>['admin.archivosmedia.update',$media],'method'=>'put']) !!}

          
              <div class="form-group">
                  {!! Form::label('name', 'Nombre') !!}
                  {!!Form :: text ('name', null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del texto'])!!}
                  @error('name')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
              </div>   
              <div class="form-group">
                  {!! Form::label('descripcion', 'Descripcion') !!}
                  {!!Form :: textarea ('descripcion', null,['class'=>'form-control','placeholder'=>'Ingrese el contenido del texto'])!!}
                  @error('descripcion')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
              </div> 
              <div class="form-group">
                {!! Form::label('categoria', 'Categoria') !!}
                {!!Form :: select ('categoria', ['servicios' => 'servicios','quienes_somos' => 'quienes_somos','proyectos' => 'proyectos'], 'null',['class'=>'form-control'])!!}
                @error('categoria')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            
              <div class="form-group">
                  {!! Form::label('estado', 'Estado') !!}
                  {!!Form :: select ('estado', ['Habilitado' => 'Habilitado', 'deshabilitado' => 'deshabilitado'], 'deshabilitado',['class'=>'form-control'])!!}
                  @error('estado')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
              </div>
  
              {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
  
          {!! Form::close() !!}
             
              <br>
              <div class="col-md-6" >
                <a href="{{route('admin.archivosmedia.index')}}"  class="btn btn-danger"  role="button" style="width: 150px">Cancelar</a>
              </div>
              <br>
              

              
        </div>
    </div>
    
   
    

@stop

