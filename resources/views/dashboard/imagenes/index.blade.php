@extends('layouts.plantillaBase')
@section('content')
@if(session('mensaje'))
<div class="alert alert-success">
    {{ session('mensaje') }}
</div>
@endif
    <h2>Lista de imagenes</h2>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.imagenes.create')}}">Nueva imagen</a>
        </div>
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                       
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Media</th>
                        
                        <th colspan="2"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($imagenes as $item)
                        <tr>
                           
                            <td>{{$item->name}}</td>
                            <td>{{$item->estado}}</td>
                            <td>{{$item->media->name}}</td>
                            <td>
                                <a href="/{{$item->archivo}}">Ver</a>
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.imagenes.edit',$item->id)}}">Editar</a>
                            </td>
                            <td> 
                                <form action="{{route('admin.imagenes.destroy',$item->id)}}" method="post">
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
            {!! $imagenes->links() !!}
        </div>
    </div>
    
    

@stop

