@extends('layouts.plantillaBase')


@section('content')
@if(session('mensaje'))
<div class="alert alert-success">
    {{ session('mensaje') }}
</div>
@endif
    <h2>Clientes</h2>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.clientes.create')}}">Nuevo</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Logo</th>
                        <th>Estado</th>
                        <th colspan="2"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nombre}}</td>
                            @if(empty($item->logo))
                            <td><a href="/img/sinlogo.png">Ver</a></td>
                            
                            @else
                            <td>
                                <a href="/{{$item->logo}}">Ver</a>
                            </td>
                            @endif
                                
                            
                            <td>
                                {{$item->estado}}
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.clientes.edit',$item->id)}}">Editar</a>
                               

                            </td>
                            <td> 
                                <form action="{{route('admin.clientes.destroy',$item->id)}}" method="post">
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

