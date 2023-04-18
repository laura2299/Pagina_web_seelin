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
            <h2>MISION</h2>
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
            <h2>VISION</h2>
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
            <h2>VALORES</h2>
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
            <h2>SEGURIDAD INDUSTRIAL</h2>
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum 
                dolor nimi deleniti harum sed? Dicta rem nesciunt 
                debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>


-->
<!--
    <h1>¿QUIENES SOMOS?</h1>
    <div class="row borde">
        <div class="col-4 img_c ">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6 parra">
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum dolor nimi deleniti harum sed? Dicta rem nesciunt debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>

    </div>
    <div class="linea-2"></div>
    <div class="row borde">
            <div class="col-6 parra dos">
                <h2 style="text-align:left;">MISION</h2>
                <p style="padding-left:0% ">Lorem ipsum dolor sit amet consectetur, 
                    adipisicing elit. Animi dignissimos odio 
                    tempore magni ut debitis necessitatibus rerum 
                    perspiciatis inventore soluta cumque officiis blanditiis 
                    neque at cum, accusamus ullam doloremque Lorem ipsum dolor nimi deleniti harum sed? Dicta rem nesciunt debitis totam maiores suscipit, cupiditate atque labore?</p>
            </div>
            <div class="col-4 img_c dos">
                <img src="img/12.jpg" alt="" class="img-fluid">
            </div>
    </div>
    <div class="linea-2"></div>
    <div class="row borde">
        <div class="col-4 img_c ">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6 parra">
            <h2 style="text-align:right;">VISION</h2>
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum dolor nimi deleniti harum sed? Dicta rem nesciunt debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>
    <div class="linea-2"></div>
    <div class="row borde">

        <div class="col-6 parra dos">
            <h2 style="text-align:left;">VALORES</h2>
            <p style="padding-left:0% ">Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum dolor nimi deleniti harum sed? Dicta rem nesciunt debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
        <div class="col-4 img_c dos">
            <br>
            <img src="img/12.jpg" alt="" class="img-fluid" >
        </div>
    
    </div>
    <div class="linea-2"></div>
    <div class="row borde">
        <div class="col-4 img_c ">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6 parra">
            <h2 style="text-align:right;">SEGURIDAD INDUSTRIAL</h2>
            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Animi dignissimos odio 
                tempore magni ut debitis necessitatibus rerum 
                perspiciatis inventore soluta cumque officiis blanditiis 
                neque at cum, accusamus ullam doloremque Lorem ipsum dolor nimi deleniti harum sed? Dicta rem nesciunt debitis totam maiores suscipit, cupiditate atque labore?</p>
        </div>
    </div>
-->
</div>
@endsection