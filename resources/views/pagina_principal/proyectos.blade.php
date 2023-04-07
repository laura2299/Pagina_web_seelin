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
                        height: 100%;
                        border-radius:50%;
                        margin:0px 10px 10px 10px;
                }
                .cp_texto{
                        height:min-content;
                        border-top: 5px solid #24315E;
                        background: #fff;
                        padding: 10px;
                }

                .cp_texto h4{
                        text-align:center;
                }
        </style>
    <div class="container-fluid">
        <h1 style="text-align: left p-4">PROYECTOS</h1>

                <div class="row">
                        <div class="c_proyecto col-3 ">
                                <div class="cp_imagen">
                                        <img src="" alt="Imagen Proyecto">
                                </div>
                                <div class="cp_texto">
                                        <h4>Analisis y diseño de Apantallamiento en Subestaciones Valle de Zongo</h4>
                                </div>
                        </div>

                        <div class="c_proyecto col-3 ">
                                <div class="cp_imagen">
                                        <img src="" alt="Imagen Proyecto">
                                </div>
                                <div class="cp_texto">
                                        <h4>Analisis y diseño de Apantallamiento en Subestaciones Valle de Zongo</h4>
                                </div>
                        </div>

                        <div class="c_proyecto col-3 ">
                                <div class="cp_imagen">
                                        <img src="" alt="Imagen Proyecto">
                                </div>
                                <div class="cp_texto">
                                        <h4>Analisis y diseño de Apantallamiento en Subestaciones Valle de Zongo</h4>
                                </div>
                        </div>

                        <div class="c_proyecto col-3 ">
                                <div class="cp_imagen">
                                        <img src="" alt="Imagen Proyecto">
                                </div>
                                <div class="cp_texto">
                                        <h4>Analisis y diseño de Apantallamiento en Subestaciones Valle de Zongo</h4>
                                </div>
                        </div>
                </div>
                  
        </div>

        
        
    </div>
@endsection