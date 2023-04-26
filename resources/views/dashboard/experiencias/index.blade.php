@extends('layouts.plantillaBase')

@section('content')
@if(session('mensaje'))
<div class="alert alert-success">
    {{ session('mensaje') }}
</div>
@endif
    <h2>Experiencias</h2>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.experiencias.create')}}">Nuevo</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Actividad</th>
                        <th>Fecha Inicio</th>
                        <th>Categoria</th>
                        <th>Cliente</th>
                        <th>Estado</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($experiencias as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->actividad}}</td>
                            <td>{{$item->fecha_inicio}}</td>
                            <td>{{$item->categoria}}</td>
                            <td>{{$item->cliente->nombre}}</td>
                            <td>{{$item->estado}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.experiencias.edit',$item->id)}}">Editar</a>
                               

                            </td>
                            <td> 
                                <form action="{{route('admin.experiencias.destroy',$item->id)}}" method="post">
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

