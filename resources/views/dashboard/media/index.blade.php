@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Media proyectos y mas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.archivosmedia.create')}}">Nuevo</a>
            <a href="{{route('admin.imagenes.create')}}"  class="btn btn-secondary"  role="button" style="width: 150px">agregar imagenes</a>
            <a class="btn btn-primary" href="{{route('admin.imagenes.index')}}" class="btn btn-primary">Imagenes</a>

        </div>
        <div class="col-md-6" >
          </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                        <th colspan="2"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medias as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$item->categoria}}</td>
                            <td>{{$item->estado}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.archivosmedia.edit',$item->id)}}">Editar</a>
                            </td>
                            <td> 
                                <form action="{{route('admin.archivosmedia.destroy',$item->id)}}" method="post">
                                 @csrf
                                 <!--  covertimos el metod_field en delete ya que es lo que espera la funcion store del controlador -->
                                {{method_field('DELETE')}}
                                <!--onclick retorna un mensaje de confirmacion antes de realizar el submit -->
                                <input type="submit" onclick="return confirm('esta accion es irreversible')" value="Eliminar"  class="btn btn-danger btn-sm" >
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop