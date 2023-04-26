@extends('layouts.app')
@section('content')
        <style>
                .c_proyecto{
                        display:flex;
                        flex-direction:column;
                        justify-content:center;
                        padding: 10px 0px 0px 0px;
                        background:#16979A;
                        margin:20px;
                        min-width: 300px;
                        height:450px;
                }
                .titulo{
                    color: #24315E;
                    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                    font-style: oblique;
                    text-align:right;
                }
                .c_proyecto:nth-child(2n){
                        background:#24315E;
                }
                .c_proyecto:nth-child(2n) .cp_texto{
                        border-top: 5px solid #16979A;
                }
                .cp_imagen{
                        align-self:center;
                        width: 80%;
                        background:#fff;
                        aspect-ratio: 1 / 1;
                        height:270px;
                        border-radius:50%;
                        margin:0px 10px 10px 10px;
                }
                .cp_imagen img{
                        width: 100%;
                        border-radius:50%;
                        height:270px;
                }
                .cp_texto{
                        display:flex;
                        align-items: center;
                        height:180px;
                        border-top: 5px solid #24315E;
                        background: #fff;
                        padding: 10px;
                        
                }

                .cp_texto h4{
                        text-align:center;
                        
                }
        </style>
    <div class="container-fluid">
        <h1 class="titulo">PROYECTOS</h1>
            <div class="row">
                @foreach ($medias as $item)
                    <div class="c_proyecto col-3 ">
                        <div class="cp_imagen">
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
                        <div class="cp_texto">
                            <h4>{{$item->name}}</h4>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    </div>
@endsection