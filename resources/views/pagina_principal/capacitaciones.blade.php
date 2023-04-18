@extends('layouts.app')
@section('content')
<style>
    .cap_sec{
        border-bottom: 3px solid #16979A;
        border-right: 3px solid #16979A;
        margin:10px;
        padding: 5px;
    }
    .cap_sec h3{
        border-bottom: 3px solid #24315E;
    }
    .part_abajo{
        display: flex;
        justify-content: space-between;
    }
    .btn_left{
        padding: 10px;
        background: #16979A;
        color:white;
        text-decoration:none;
        border-radius:8px;
    }
</style>
<div class="content-fluid">
    <h1>Capacitaciones</h1>
    <div class="row">
        @foreach ($capacitaciones as $item)
            <div class="col-5 cap_sec">
                <h3>{{$item->titulo}}</h3>
                <h5>{{$item->expositor}}</h5>
                <div class="part_abajo">
                    <p>{{$item->fecha}}</p>
                    <a class="btn_left" href="#">Saber Mas</a>
                </div>
            </div>
        @endforeach     
    </div>
</div>
@endsection