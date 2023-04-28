@extends('layouts.plantillaBase')
@section('content')
    <h3>Editar imagen</h3>
    <div class="row">
        <div class="col-lg-12">
        
        {!! Form::model($imagen,['route'=>['admin.imagenes.update',$imagen],'method'=>'put','enctype' => 'multipart/form-data']) !!}
            
            @csrf
                <div class="form-group">
                {!! Form::label('file', 'Añade tu imagen: ') !!}
                {!! Form::file('file',null, array('required' => 'true'),['class'=>'form-control'])!!}
                @error('file')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <p>(No es necesario que vuelva a subir una imagen si no lo requiere)</p>
            <div class="form-group">
                {!! Form::label('estado', 'estado') !!}
                {!!Form :: select ('estado', ['habilitado' => 'habilitado', 'deshabilitado' => 'deshabilitado'], 'habilitado',['class'=>'form-control'])!!}
                @error('estado')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
           
            <div class="form-group">
                {!! Form::label('id_media', 'media') !!}
                {!! Form::select('id_media', $media, null, ['class'=>'form-control']) !!}
                @error('id_media')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>


            {!! Form::submit('Editar imagen', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}


           
              
        </div>
    </div>

@stop

