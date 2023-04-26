@extends('layouts.app')
@section('content')
<style>
    .c_fila{
        padding: 20px;
        border-bottom:10px solid #16979A;
        display:flex;
        width:100%;
    }
    .c_fila h2{
        text-align:right;
    }
    .c_fila:last-child{
        border-bottom: none;
    }
    .c_fila:nth-child(2n+1){
        flex-direction:row-reverse;
    }
    .c_fila:nth-child(2n+1) h2{
        text-align:left;
    }

    .img_c{
        min-width: 400px;
        max-width: 500px;
        height: 250px;
    }
    .img_c img{
        min-height:200px;
        max-width: 400px;
        max-height: 250px;
    }
    .c_text{
        min-width: 400px;
        margin-top:20px;
        font-size: x-large;
    }
</style>
<div class="container-q">
    <h1>¿QUIENES SOMOS?</h1>
    @foreach ($medias as $item)
        @if ($item->estado == 'Habilitado')
            @if ($item->name == 'titulo quienes somos')
                <div class="row c_fila">
                    <div class="col-4 img_c">
                        @for ($i = 0; $i < sizeof($imagenes); $i++)
                            @if ($imagenes[$i]!='[]')
                                @if ($imagenes[$i][0]->id_media == $item->id)
                                    @if (sizeof($imagenes[$i])>1)
                                        <div id="carouselExampleIndicators<?php echo $item->id;?>" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators<?php echo $item->id;?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                @for ($j = 1; $j < sizeof($imagenes[$i]); $j++)
                                                    <button type="button" data-bs-target="#carouselExampleIndicators<?php echo $item->id;?>" data-bs-slide-to="<?php echo $j;?>" aria-label="Slide <?php echo $j+1;?>"></button>
                                                @endfor
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                <img src="{{$imagenes[$i][0]->archivo}}" class="d-block w-100" alt="{{$imagenes[$i][0]->name}}">
                                                </div>
                                                @for ($j = 1; $j < sizeof($imagenes[$i]); $j++)
                                                    <div class="carousel-item">
                                                    <img src="{{$imagenes[$i][$j]->archivo}}" class="d-block w-100" alt="{{$imagenes[$i][$j]->name}}">
                                                    </div>
                                                @endfor
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators<?php echo $item->id;?>" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators<?php echo $item->id;?>" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    @else
                                        <img src="{{$imagenes[$i][0]->archivo}}" alt="{{$imagenes[$i][0]->name}}" class="img-fluid">
                                    @endif
                                @endif
                            @endif
                        @endfor 
                    </div>
                    <div class="col-6 c_text">
                        <p>{{$item->descripcion}}</p>
                    </div>
                </div>
            @else
                <div class="row c_fila">
                    <div class="col-4 img_c">
                    @for ($i = 0; $i < sizeof($imagenes); $i++)
                        @if ($imagenes[$i]!='[]')
                            @if ($imagenes[$i][0]->id_media == $item->id)
                                @if (sizeof($imagenes[$i])>1)
                                    <div id="carouselExampleIndicators<?php echo $item->id;?>" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators<?php echo $item->id;?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            @for ($j = 1; $j < sizeof($imagenes[$i]); $j++)
                                                <button type="button" data-bs-target="#carouselExampleIndicators<?php echo $item->id;?>" data-bs-slide-to="<?php echo $j;?>" aria-label="Slide <?php echo $j+1;?>"></button>
                                            @endfor
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                            <img src="{{$imagenes[$i][0]->archivo}}" class="d-block w-100" alt="{{$imagenes[$i][0]->name}}">
                                            </div>
                                            @for ($j = 1; $j < sizeof($imagenes[$i]); $j++)
                                                <div class="carousel-item">
                                                <img src="{{$imagenes[$i][$j]->archivo}}" class="d-block w-100" alt="{{$imagenes[$i][$j]->name}}">
                                                </div>
                                            @endfor
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators<?php echo $item->id;?>" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators<?php echo $item->id;?>" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                @else
                                    <img src="{{$imagenes[$i][0]->archivo}}" alt="{{$imagenes[$i][0]->name}}" class="img-fluid">
                                @endif
                            @endif
                        @endif
                    @endfor 
                    </div>
                    <div class="col-6 c_text">
                        <h2>{{$item->name}}</h2>
                        <p>{{$item->descripcion}}</p>
                        
                    </div>
                </div>
            @endif
        @endif
    @endforeach 

    
</div>
@endsection