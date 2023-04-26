@extends('layouts.app')
@section('content')
<style>
    .carousel-inner{
        min-width: 300px;
        max-height:500px;
    }
    .carousel-caption p{
        text-align:center;
    }
</style>
<div class="container-fluid cover-slides" >
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        @foreach ($medias as $item)
            @if ($item->name!='galeria')
                @for ($i = 0; $i < sizeof($imagenes); $i++)
                    @if ($imagenes[$i]!='[]')
                        @if ($imagenes[$i][0]->id_media == $item->id)
                            <div class="carousel-item active" data-bs-interval="2000" >
                                <img src="{{$imagenes[$i][0]->archivo}}" id="slide" class="d-block w-100 " alt="{{$imagenes[$i][0]->name}}" height="500em">
                            </div>
                            @for ($j = 1; $j < sizeof($imagenes[$i]); $j++)
                                <div class="carousel-item" data-bs-interval="2000" >
                                    <img src="{{$imagenes[$i][$j]->archivo}}" id="slide" class="d-block w-100 " alt="{{$imagenes[$i][$j]->name}}" height="500em">
                                </div>
                            @endfor
                        @endif
                    @endif
                @endfor
                <section id="der">
                    <div class="carousel-caption d-none d-md-block text-white transparent">
                        <h2 class="m-b-20"><strong>{{$item->name}}</strong></h2>
                        <p class="m-b-40">{{$item->descripcion}}</p>
                    </div>
                </section>
            @endif
        @endforeach           
        </div>
    </div>
</div>
<!-- Start About -->
<br>
<div class="contenedor_img">
    <style>
        .img_p{
            min-width: 300px;
            max-width: 400px;
        }
        .img_p img{
            min-width: 300px;
            max-width: 400px;
            height:290px;
        }
    </style>
    <div class="row align-items-center">
    @foreach ($medias as $item)
        @if ($item->name=='galeria')
            @for ($i = 0; $i < sizeof($imagenes); $i++)
                @if ($imagenes[$i]!='[]')
                    @if ($imagenes[$i][0]->id_media == $item->id)
                        @for ($j = 0; $j < sizeof($imagenes[$i]); $j++)
                            <div class="col img_p">
                                <img src="{{$imagenes[$i][$j]->archivo}}" class=" conborde " alt="{{$imagenes[$i][$j]->name}}" >
                            </div>
                        @endfor
                        
                    @endif
                @endif
            @endfor
        @endif
    @endforeach
    </div>
    
  </div>
<!-- End About -->

<!-- Start QT -->

@endsection
