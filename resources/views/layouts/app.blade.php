<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Seelin') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS only
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    -->
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background: rgb(255, 255, 255);
    background: linear-gradient(90deg, rgba(225, 253, 249, 0.858) 0%, rgb(206, 218, 241) 37%, rgba(219, 230, 239, 0.818) 100%);">
    
    <style>
       #barra_arriba{display: flex; flex-direction: row; background-color: #24315E;height: 45px;width: 100%;color:#fff; padding:10px;}
       #barra_arriba a{text-decoration:none;color:white;}
       #barra_arriba a:hover{text-decoration:underline;color:white;}
       #social{width:50%;}
       #sesion{display: flex;justify-content: flex-end;width:50%;} 
       #icono_blanco{background-color:#0000;}
       ion-icon{width:25px;height:25px;margin-right:10px;margin-left:10px;}
       nav{height:100px;}
       #logo{width:150px; height:50px;}
       .lista{list-style: none;}
       .lista .lis{display:inline;padding:20px;margin:1px;font-size: large;}
       .act{border-bottom: 2px solid #16979A;}

    </style>
    <style>
        #c{
            width:100%;
            display: flex;
            justify-content:flex-end;
            align-items: flex-start;
            color: white;
        }
        #c .cat{
            padding: 0px 0px 0px 0px;
            color:#16979A;
            border:2px solid #16979A ;
        }
        .cat {
            background-color: none;
            height: 100%;
            margin: 0px 0px 0px 0px;
          }

        .cat a {
            float: left;
            display: block;
            
            color: #16979A;
            text-align: center;
            padding: 20px 20px 10px 20px;
            text-decoration: none;
            font-size: large;
            overflow: hidden;
            margin-bottom: 7px;
            margin-right:10px;
        }

        .cat a:hover {
            background-color: #16979A;
            color: #fff;
            text-decoration: none;
        }

        .cat a.active {
          border-bottom:2px solid #16979A;
        }

        .cat .icon {
            display: none;
        }

        @media only screen and (max-width: 900px){
            #logo_se{display:flex;align-self:flex-start;margin-top:15px;}
            #c {
                display: flex;
                justify-content:flex-end;
                align-items: flex-end;
                background: none;
            }
            .cat a{
                display: none;
            }
            .cat a.icon {
                float: left;
                display: flex;
            }
            .cat a.icon:hover {
                float: left;
                display: flex;
            }
            .cat.responsive {
                display: flex;
                justify-content:flex-start;
                flex-direction: column-reverse;
                padding-top: 10px;
                text-align: center;
            }
            .cat.responsive a.icon {
                display: flex;
                position:static;
                background-color: #fff;
                width:80px;
                margin: 0px 0px 10px 0px;
                padding:20px 0px 15px 0px;
                justify-content: center;
            }
            .cat.responsive a {
                display: flex;
                width:180px;
                margin: 0px 0px 4px 0px;
                padding:5px 5px 10px 10px;
                background-color: #fff;
                z-index: 1;
            }
            .cat a.active {
              padding:5px 5px 0px 10px;
              border-bottom:10px solid #16979A;
            }
            .cat.responsive a:hover {
                display: flex;
                background-color: #16979A;
                color: white;
            }
        }

    </style>
    <style>
        .icono .iconito{
            display: inline;
        }
        .icono a {
            display: none;
        }

        #mnc {
            display: flex;
            justify-content:flex-end;
            align-items: flex-end;
            background: none;
            z-index: 100;
        }
        
        .icono.responsive {
            display: flex;
            justify-content:flex-start;
            flex-direction: column-reverse;
            margin-top:30px;
            padding-top: 10px;
            text-align: center;
        }
        .icono.responsive a {
            display: flex;
            width:115px;
            margin: 0px 0px 4px 0px;
            padding:5px 5px 10px 10px;
            background-color: #16979A;
            text-align:left;
            z-index: 1;
            
        }
        .icono a.active {
            padding:5px 5px 0px 10px;
            border-bottom:10px solid #16979A;
        }
        .icono.responsive a:hover {
            display: flex;
            background-color: #16979A;
            color: white;
        }
        .whats{
			width:105px;
            margin:20px;
			position:fixed;
			bottom:0px;
			right:0;
            background: #25D366;
            border:5px solid white;
            border-radius:30px;
            

		}
        .whats a ion-icon{
            width:80px;
            height:80px;
            color: white;
        }
        .whats:hover{
            transform:translateY(-10px);
        }
        .btn_oculto{
            background:none;
            border:none;
            margin: 0px;
            padding:0px;
        }
    </style>
    <div id="app">
    <div id="barra_arriba">
            <div id="social">
                <a href="https://www.facebook.com/seelin.ingenieria/" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
                <!--<a href="#"><ion-icon name="globe-outline"></ion-icon></a>-->
                <a href="mailto:info@seelin.bo?subject=Preguntas y dudas"><ion-icon name="mail-outline"></ion-icon></a>
            </div>
            <div id="sesion">

                <div class="icono" id="mnc">
                    
                    <?php $id = session_id();echo $id;?>
                    
                    
                    @can('cambio_contraseña')
                    <a href="{{ route('finaliza-usuario') }}">Cerrar Sesion</a>
                    <a href="{{ route('cambio_contraseña') }}">Configuración</a>
                    @endcan
                    @can('documentos')
                    <a href="{{ route('documentos') }}">Documentos</a>
                    @endcan

                    <a href="{{ route('inicio_sesion') }}">Inicio Sesion</a>
                </div>
                @can('cambio_contraseña')
                {{auth()->user()->name}}
                @endcan  
                <a href="javascript:void(0);" class="iconito" onclick="miFun2()"><ion-icon name="person-circle-outline"></ion-icon></a>
                
            </div>
        </div>

        <nav class="navbar  bg-white d-flex">

          <div class="container-fluid row">
            <div id="logo_se" class="col-2 bg-white">
                <a  href="{{ route('principal') }}">
                  <img id="logo" src="img/logoselin2.png" alt="Logo Seelin" >
                </a> 
            </div>
            <div class="col-10 d-flex flex-row-reverse">
              <div class="cat " id="c">
                  <a href="{{ route('principal') }}" class="@if(Request::is('/')) active @endif">Inicio</a> 
                  <a href="{{ route('quienes_somos') }}" class="@if(Request::is('quienes_somos')) active @endif">Quienes Somos</a>
                  <a href="{{ route('servicios') }}" class="@if(Request::is('servicios')) active @endif">Servicios</a>
                  <a href="{{ route('clientes') }}" class="@if(Request::is('clientes')) active @endif">Clientes</a>
                  <a href="{{ route('proyectos') }}" class="@if(Request::is('proyectos')) active @endif">Proyectos</a>
                  <a href="{{ route('capacitaciones') }}" class="@if(Request::is('capacitaciones')) active @endif">Capacitaciones</a>
                  <a href="javascript:void(0);" class="icon" onclick="miFun()">
                    <ion-icon name="reorder-four-outline"></ion-icon>
                  </a>
              </div>
              <script>
                  function miFun() {
                    var x = document.getElementById("c");
                    if (x.className === "cat") {
                      x.className += " responsive";
                    } else {
                      x.className = "cat";
                    }
                  }
                  function miFun2() {
                    var x = document.getElementById("mnc");
                    if (x.className === "icono") {
                      x.className += " responsive";
                    } else {
                      x.className = "icono";
                    }
                  }
              </script>

              </div>
            </div>
        </nav>

        @yield('content') @section('content')

        <div class="whats">
		    <a href="https://api.whatsapp.com/send/?phone=59172572458" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon></a>
		</div>

        <style>
            footer{
                display:flex;
                justify-content: space-around;
                padding: 0px;
                background: white;
                width:100%;
                
            }
            .lin_azul{
                display:flex;
                justify-content: space-around;
                border-top:8px solid #24315E;
                border-bottom:8px solid #24315E;
                padding-bottom:15px;
                padding-top:15px;
                width: 100%;
            }
            .logo_f{
                display:flex;
                min-width:300px;
                justify-content:center;
            }
            .logo_f img{
                width:100%;
            }
            .datos_f{
                min-width: 400px;
                display:flex;
                flex-direction:column;
                align-items: center;
                margin: 10px 0px 10px 0px;
            }
            .datos_f p{
                text-align:center;
            }
            .contactanos_f{
                display:flex;
                justify-content:center;
                align-items: center;
                flex-direction:column;
                min-width: 300px;
                margin-bottom:10px;
            }
            .contactanos_f a{
                padding:10px;
                font-size:large;
                color:white;
                text-decoration:none;
                border-radius:8px;
                background: #16979A;
                width:100%;
                text-align:center;
                height:fit-content;
            }
            .contactanos_f a ion-icon{
                height:60%;
            }
            .fin h6{
                margin-top:10px;
                text-align:center;
            }
        </style>
        <footer>
            <div class="conteiner-q">
                <div class="row lin_azul">
                  <div class="logo_f col-3">
                        <img src="img/logoselin2.png" alt="logo Seelin">
                  </div>
                  <div class="datos_f col-4">
                    <p>Cels.: (591) 77527110 – 75810501 – 75810503</p>
                    <p>Telf./Fax.: (591-2) 2233910 – 2232362</p>
                    <p>info@seelin.bo</p>
                  </div>
                  <div class="contactanos_f col-3">
                    <a href="/Pagina_web_seelin/public/contactanos">Contactanos</a>
                 </div>
                </div>
                <div class="row fin">
                    <h6>Calle Roberto Hinojosa Nº 1875, Zona San Antonio, La Paz Bolivia.</h6>
                </div>
            </div>
        </footer>
            <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html>
