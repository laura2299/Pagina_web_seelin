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
    }
    .img_c img{
        border-radius:50%;
        aspect-ratio:1/0.75;
    }
    .c_text{
        min-width: 400px;
        margin-top:20px;
        font-size: x-large;
    }
</style>
<div class="container-q">
    <h1>NUESTROS SERVICIOS</h1>

    @foreach ($medias as $item)
        @if ($item->estado == 'Habilitado')
            @if ($item->name == 'titulo')
                <div class="row c_fila">
                    <div class="col-4 img_c">
                        <img src="img/12.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-6 c_text">
                        <p>{{$item->descripcion}}</p>
                    </div>
                </div>
            @else
                <div class="row c_fila">
                    <div class="col-4 img_c">
                        <img src="img/12.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-6 c_text">
                        <h2>{{$item->name}}</h2>
                        <p>{{$item->descripcion}}</p>
                    </div>
                </div>
            @endif
        @endif
    @endforeach 
    <!--
    <div class="row c_fila">
        <div class="col-4 img_c">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6 c_text">
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum 
                dolor nimi deleniti harum sed? Dicta rem nesciunt 
                debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>
    <div class="row c_fila">
        <div class="col-4 img_c">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6 c_text">
            <h2>ESTUDIO DE SISTEMAS ELECTRICOS</h2>
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum 
                dolor nimi deleniti harum sed? Dicta rem nesciunt 
                debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>
    <div class="row c_fila">
        <div class="col-4 img_c">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6 c_text">
            <h2>DISEÑO E INGENIERIA</h2>
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum 
                dolor nimi deleniti harum sed? Dicta rem nesciunt 
                debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>
    <div class="row c_fila">
        <div class="col-4 img_c">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6 c_text">
            <h2>CAPACITACION</h2>
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum 
                dolor nimi deleniti harum sed? Dicta rem nesciunt 
                debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>
    <div class="row c_fila">
        <div class="col-4 img_c">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6 c_text">
            <h2>MONTAJE ELECTROMECÁNICO</h2>
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum 
                dolor nimi deleniti harum sed? Dicta rem nesciunt 
                debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>
    <div class="row c_fila">
        <div class="col-4 img_c">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6 c_text">
            <h2>AUTOMATIZACION Y CONTROL</h2>
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum 
                dolor nimi deleniti harum sed? Dicta rem nesciunt 
                debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>
    <div class="row c_fila">
        <div class="col-4 img_c">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6 c_text">
            <h2>MANTENIMIENTO ELECTROMECÁNICO</h2>
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum 
                dolor nimi deleniti harum sed? Dicta rem nesciunt 
                debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>
</div>

-->
<!--
<div class="container-q">
    <h1>NUESTROS SERVICIOS</h1>
    <div class="row">
        <div class="col-4 ">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
            <div class="col-6">
                <br>
                <br>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur, 
                    adipisicing elit. Animi dignissimos odio 
                    tempore magni ut debitis necessitatibus rerum 
                    perspiciatis inventore soluta cumque officiis blanditiis 
                    neque at cum, accusamus ullam doloremque Lorem ipsum dolor nimi deleniti harum sed? Dicta rem nesciunt debitis totam maiores suscipit, cupiditate atque labore?</p>
            </div>

    </div>
    <div class="linea-2"></div>
    <div class="row ">

            <div class="col-6 dos">
                <h2 style="text-align:left;">ESTUDIOS DE SISTEMAS ELECTRICOS</h2>
                <p style="padding-left:0% ">Lorem ipsum dolor sit amet consectetur, 
                    adipisicing elit. Animi dignissimos odio 
                    tempore magni ut debitis necessitatibus rerum 
                    perspiciatis inventore soluta cumque officiis blanditiis 
                    neque at cum, accusamus ullam doloremque Lorem ipsum dolor nimi deleniti harum sed? Dicta rem nesciunt debitis totam maiores suscipit, cupiditate atque labore?</p>
            </div>
            <div class="col-4 dos">
                <img src="img/12.jpg" alt="" class="img-fluid">
            </div>
        
    </div>
    <div class="linea-2"></div>
    <div class="row">
        <div class="col-4 ">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6">
            <h2 style="text-align:right;">DISEÑO E INGENIERÍA </h2>
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum dolor nimi deleniti harum sed? Dicta rem nesciunt debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>
    <div class="linea-2"></div>
    <div class="row ">

        <div class="col-6 dos">
            <h2 style="text-align:left;">CAPACITACION</h2>
            <p style="padding-left:0% ">Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum dolor nimi deleniti harum sed? Dicta rem nesciunt debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
        <div class="col-4 dos">
            <br>
            <img src="img/12.jpg" alt="" class="img-fluid" >
        </div>
    
    </div>
    <div class="linea-2"></div>
    <div class="row">
        <div class="col-4 ">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6">
            <h2 style="text-align:right;">MONTAJE ELECTROMECÁNICO </h2>
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum dolor nimi deleniti harum sed? Dicta rem nesciunt debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>
    <div class="linea-2"></div>
    <div class="row ">

        <div class="col-6 dos">
            <h2 style="text-align:left;">AUTOMATIZACION Y CONTROL</h2>
            <p style="padding-left:0% ">Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum dolor nimi deleniti harum sed? Dicta rem nesciunt debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
        <div class="col-4 dos">
            <br>
            <img src="img/12.jpg" alt=""class="img-fluid">
        </div>
    
    </div>
    <div class="linea-2"></div>
    <div class="row">
        <div class="col-4 ">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6">
            <h2 style="text-align:right;">MANTENIMIENTO ELECTROMECÁNICO </h2>
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum dolor nimi deleniti harum sed? Dicta rem nesciunt debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>
    
</div>
-->
@endsection