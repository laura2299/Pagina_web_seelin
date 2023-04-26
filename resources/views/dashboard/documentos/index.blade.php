@extends('layouts.plantillaBase')

@section('content')
<h2>Lista de Documentos</h2>
@if(session('mensaje'))
<div class="alert alert-success">
    {{ session('mensaje') }}
</div>
@endif
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.documentos.create')}}">Nuevo</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        
                        <th>Nombre</th>
                        <th>Formato</th>
                        <th>Fecha_de_subida</th>
                        <th>Categoria</th>
                        <th>Fecha del archivo</th>
                        <th>Estado</th>
                        <th colspan="2"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Archivos as $item)
                        <tr>
                            
                            <td>{{$item->name}}</td>
                            <td>{{$item->format}}</td>
                            <td>{{$item->fecha_subida}}</td>
                            <td>{{$item->categoria}}</td>
                            <td>{{$item->fecha}}</td>
                            <td>{{$item->estado}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.documentos.edit',$item->id)}}">Editar</a>
                               

                            </td>
                            <td> 
                                <form action="{{route('admin.documentos.destroy',$item->id)}}" method="post">
                                 @csrf
                                 <!--  covertimos el metod_field en delete ya que es lo que espera la funcion store del controlador -->
                                {{method_field('DELETE')}}
                                <!--onclick retorna un mensaje de confirmacion antes de realizar el submit -->
                                <input type="submit" onclick="return confirm('esta accion es irreversible')" value="Eliminar"  class="btn btn-danger btn-sm" >
                                </form>
                            </td>
                            <td>
                                <a href="/{{$item->path}}">Descargar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    

@stop

