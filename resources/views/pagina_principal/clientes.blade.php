@extends('layouts.app')
@section('content')
    <div class="container-q">
        <h1 style="text-align: left p-4">NUESTROS CLIENTES</h1>
        <div class="container_x">
            @foreach ($medias as $item)
                <p>{{$item->descripcion}}</p>
            @endforeach
        </div>
        <!--
        <div class="container-s">
        <div class="row">
            <div class="col">
                    <img src="img/dlpz.png" alt="Imagen" class="">                   
            </div>
            <div class="col">
                    <img src="img/elfec.jpg" alt="Imagen" class="">                   
            </div>
            <div class="col"> 
                    <img src="img/ende-vallehermoso.png" alt="Imagen" class="">                   
            </div>
        </div>
        <div class="row">
            <div class="col ">
                    <img src="img/cobee.png" alt="Imagen" class="">                   
            </div>
            <div class="col">
                    <img src="img/entel_bolivia_logosvg.png" alt="Imagen" class="">                   
            </div>
            <div class="col"> 
                    <img src="img/lC1.png" alt="Imagen" class="">                   
            </div>
        </div>
        <div class="row">
            <div class="col ">
                    <img src="img/Screenshot_1.png" alt="Imagen" class="">                   
            </div>
            <div class="col">
                    <img src="img/Screenshot_2.png" alt="Imagen" class="">                   
            </div>
            <div class="col"> 
                    <img src="img/Screenshot_4.png" alt="Imagen" class="">                   
            </div>
        </div>
        <div class="row">
            <div class="col ">
                    <img src="img/hb.jpg" alt="Imagen" class="">                   
            </div>
            <div class="col">
                    <img src="img/Screenshot_5.png" alt="Imagen" class="">                   
            </div>
            <div class="col"> 
                    <img src="img/Screenshot_7.png" alt="Imagen" class="">                   
            </div>
        </div>
        <div class="row">
            <div class="col ">
                    <img src="img/Screenshot_6.png" alt="Imagen" class="">                   
            </div>
            <div class="col">
                    <img src="img/Screenshot_3.png" alt="Imagen" class="">                   
            </div>
            <div class="col"> 
                    <img src="img/sinchi_wayra.jpg" alt="Imagen" class="">                   
            </div>
        </div>
        </div>
        -->
        <style>
            .boton_e{
                padding: 10px 15px;
                background-color:#5488a3;
                color:#fff;
                border-radius: 8px;
                cursor: pointer;
                transition: all 300ms ease;
            }
            .boton_e:hover{
                background-color:#185e83;
            }
            .boton-m{
                display:flex;
                flex-direction:column;
                padding: 10px;
                background-color:#fff;
            }
            .boton-m img{
                height: 100px;
                width: auto;
                align-self:center;
                max-width: 200px;
            }
            .boton-m h4{
                margin: 10px 0px 10px 0px;
                text-align:center;
            }
            .boton-m label{
                text-align:center;
            }
            #btn-m{
                display: none;
            }
            .contenedor-modal{
                width: 100%;
                height: 100vh;
                position:fixed;
                top: 0;left: 0;
                background-color:rgba(144,148,150,0.8);
                display: none;
                justify-content: center;
                align-items: center;
                z-index:100;
            }
            #btn-m:checked ~ .contenedor-modal{
                display: flex;
            }
            .contenido-modal{
                width: 90%;
                max-width: 800px;
                max-height: 60%;
                min-width: 400px;
                padding:5px;
                background-color:#fff;
                overflow-y:scroll;
            }
            .contenido-modal h2 {
                margin-bottom:10px;
            }
            .contenido-modal .btn-cerrar{
                width: 100%;
                margin-top: 15px;
                display: flex;
                justify-content: flex-end;
            }
            .cerrar-modal{
                width: 100%;
                height: 100vh;
                position: absolute;
                top: 0;left: 0;
                z-index: -1;
            }
            .cliente_box{
                min-width: 250px;
                margin:25px 5px 25px 5px;
                border-radius:8px;
                background:#fff;
                box-shadow: 5px 5px 5px #c6c6c6;
            }
            #mod_titulo{
                display: flex;
                padding: 15px;
            }
            #mod_titulo img{
                margin-right:20px;
            }
            #tabla_oculta{  
                display:none;
            }
        </style>
        
        <input type="checkbox" name="btn-m" id="btn-m">
        <div class="container-fluid">
        <div class="row">
            @foreach ($clientes as $item)
                
                @if ($item->estado == 'Habilitado' )
                    <div class="col-3 cliente_box">
                        <div class="boton-m">
                            <img src="img/logo_cliente/{{$item->logo}}" onerror="this.onerror=null;this.src='img/logo_cliente/logoSeelin.png';" alt="Imagen" id="img_{{$item->nombre}}" > 
                            <h4>{{$item->nombre}}</h4>
                            <label for="btn-m" id="{{$item->nombre}}" class="boton_e" onclick="lista_Exp(this.id,{{$item->id}})">
                                Ver Trabajos
                            </label>
                        </div>                      
                    </div>
                @endif 
            @endforeach 
                
            <!--
            <div class="col-3 cliente_box">
                <div class="boton-m">
                    <img src="img/elfec.jpg" alt="Imagen" >  
                    <h4>De la Paz</h4>
                    <label for="btn-m" id="COPERCONS" class="boton_e" onclick="lista_Exp(this.id)">
                        Ver Trabajos
                    </label>
                </div>  
                                     
            </div>
            <div class="col-3 cliente_box"> 
                <div class="boton-m">
                    <img src="img/ende-vallehermoso.png"  alt="Imagen" > 
                    <h4>De la Paz</h4>
                    <label for="btn-m" class="boton_e" id="EJEMPLO" onclick="lista_Exp(this.id)">
                        Ver Trabajos
                    </label>
                </div> 
                                      
            </div>  
            <div class="col-3 cliente_box ">
                    <img src="img/cobee.png" alt="Imagen">                   
            </div>
            <div class="col-3 cliente_box">
                    <img src="img/entel_bolivia_logosvg.png" alt="Imagen">                   
            </div>
            <div class="col-3 cliente_box"> 
                    <img src="img/lC1.png" alt="Imagen">                   
            </div>

        
            <div class="col-3 cliente_box ">
                    <img src="img/Screenshot_1.png" alt="Imagen">                   
            </div>
            <div class="col-3 cliente_box">
                    <img src="img/Screenshot_2.png" alt="Imagen">                   
            </div>
            <div class="col-3 cliente_box"> 
                    <img src="img/Screenshot_4.png" alt="Imagen">                   
            </div>

        
            <div class="col-3 cliente_box ">
                    <img src="img/hb.jpg" alt="Imagen">                   
            </div>
            <div class="col-3 cliente_box">
                    <img src="img/Screenshot_5.png" alt="Imagen">                   
            </div>
            <div class="col-3 cliente_box"> 
                    <img src="img/Screenshot_7.png" alt="Imagen">                   
            </div>
        
        
            <div class="col-3 cliente_box ">
                    <img src="img/Screenshot_6.png" alt="Imagen">                   
            </div>
            <div class="col-3 cliente_box">
                    <img src="img/Screenshot_3.png" alt="Imagen">                   
            </div>
            <div class="col-3 cliente_box"> 
                    <img src="img/sinchi_wayra.jpg" alt="Imagen">                   
            </div>
        -->
        </div>
    </div>
    <div id="tabla_oculta">
        <table id="tabla_lista">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Contratante</th>
                    <th>Actividad</th>
                    <th>Fecha Inicio</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($trabajos as $item2)
                @if ($item2->estado == 'Habilitado')
                    <tr>
                        <th>1</th>
                        <th>{{$item2->id_cliente}}</th>
                        <th>{{$item2->actividad}}</th>
                        <th>{{$item2->fecha_inicio}}</th>
                        <th>{{$item2->categoria}}</th>
                    </tr>
                @endif

            @endforeach 
                <!--
                <tr>
                    <th>2</th>
                    <th>DELAPAZ</th>
                    <th>EXTENSIÓN DE RED EN MEDIA TENSION CON TRANSFORMADOR DE 15 KVA PARA BOMBA DE AGUA EN LA COMUNIDAD TANANA</th>
                    <th>2022-11</th>
                    <th>CONSULTORIA</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>COPERCONS</th>
                    <th>EXTENSIÓN DE RED EN MEDIA TENSION CON TRANSFORMADOR DE 15 KVA PARA BOMBA DE AGUA EN LA COMUNIDAD TANANA</th>
                    <th>2022-11</th>
                    <th>CONSULTORIA</th>
                </tr>
                <tr>
                    <th>4</th>
                    <th>DELAPAZ</th>
                    <th>EXTENSIÓN DE RED EN MEDIA TENSION CON TRANSFORMADOR DE 15 KVA PARA BOMBA DE AGUA EN LA COMUNIDAD TANANA</th>
                    <th>2022-11</th>
                    <th>CONSTRUCCION</th>
                </tr>
                <tr>
                    <th>5</th>
                    <th>COPERCONS</th>
                    <th>EXTENSIÓN DE RED EN MEDIA TENSION CON TRANSFORMADOR DE 15 KVA PARA BOMBA DE AGUA EN LA COMUNIDAD TANANA</th>
                    <th>2022-11</th>
                    <th>CONSULTORIA</th>
                </tr>
        -->
            </tbody>
        </table>
    </div>
    <div class="contenedor-modal">
        <div class="contenido-modal">
            <div id="mod_titulo">
                <img id="mod_img" src="" alt="Logo">
                <h4 id="mod_h4"></h4>
            </div>
            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Actividad</th>
                            <th>Fecha Inicio</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody id="tabla_r"></tbody>
                </table>
            </div>
            <div class="btn-cerrar">
                <label for="btn-m" class="boton_e">
                Cerrar
                </label>
            </div>
        </div>
        <label for="btn-m" class="cerrar-modal"></label>
    </div>
    <script>
        function lista_Exp(nombre, id,logo) {
            var tabi=document.getElementById("tabla_r");
            var rowCount = tabi.rows.length;
            for (let j = 0; j < rowCount; j++) {
                tabi.deleteRow(-1);
                c-=1;
            }
            var x=document.getElementById("tabla_lista");
            
            var md=document.getElementById("mod_img");

            var si=document.getElementById("img_"+nombre);
            
            md.src = si.src;
            md.alt ="Logo "+nombre;
            var mh=document.getElementById("mod_h4");
            mh.innerText=nombre;
            var y;
            
            for (let i = 1; i < x.rows.length; i++) {
                y=x.rows[i].cells;
                if (y[1].innerHTML==id) {
                    tabi.insertRow(-1).innerHTML='<td>'+y[2].innerHTML+'</td><td>'+y[3].innerHTML.slice(0,10)+'</td><td>'+y[4].innerHTML+'</td>';
                }
            }
        }
    </script>
@endsection