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
    <title>Principal</title>

</head>

<body
    style="background: rgb(255, 255, 255);
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

    </style>
    <div id="app">

    <div id="barra_arriba">
            <div id="social">
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="globe-outline"></ion-icon>
                <ion-icon name="mail-outline"></ion-icon>
            </div>
            <div id="sesion">
                <a href="/Pagina_web_seelin/public/inicio_sesion">Inicio Sesion</a>
                <div class="icono" id="mnc">
                    <a href="/Pagina_web_seelin/public/">Cerrar Sesión</a>
                    <a href="/Pagina_web_seelin/public/cambio_contraseña">Configuración</a>
                    <a href="/Pagina_web_seelin/public/documentos">Documentos</a>
                </div>  
                <a href="javascript:void(0);" class="iconito" onclick="miFun2()"><ion-icon name="person-circle-outline"></ion-icon></a>
                
            </div>
        </div>

        <nav class="navbar  bg-white d-flex">

          <div class="container-fluid row">
            <div id="logo_se" class="col-2 bg-white">
                <a  href="/Pagina_web_seelin/public/">
                  <img id="logo" src="img/logo.png" alt="Logo Seelin" >
                </a> 
            </div>
            <div class="col-10 d-flex flex-row-reverse">
              <div class="cat " id="c">
                  <a href="/Pagina_web_seelin/public/" class="active">Inicio</a> 
                  <a href="/Pagina_web_seelin/public/quienes_somos">Quienes Somos</a>
                  <a href="/Pagina_web_seelin/public/servicios">Servicios</a>
                  <a href="/Pagina_web_seelin/public/clientes">Clientes</a>
                  <a href="/Pagina_web_seelin/public/proyectos">Proyectos</a>
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

        <!---contenido--->
        @yield('content') @section('content')

        <!---footer---> 
        <footer>
            <div class="linea"></div>
            <div class="container__footer">
                <div class="box__footer">
                    <div class="logo">
                        <img src="img/logoselin2.png" alt="">
                    </div>
                    
                </div>
                <div class="box__footer">
                    <h4>Cels.: (591) 77527110 – 75810501 – 75810503</h4>
                    <h4>Telf./Fax.: (591-2) 2233910 – 2232362</h4>
                    <h4>info@seelin.bo</h4>
                </div>
                <div class="box__footer">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

                    <a href="/Pagina_web_seelin/public/contactanos" class="btn btn-personalizado btn-lg " style="color:#ffffff;">Contactanos</a>
                </div>
                
                
            </div>
            <div class="linea"></div>
            <div class="container-fluid bg-light text-center">
                <p class="small " style="text-align:center">Calle Roberto Hinojosa Nº 1875, Zona San Antonio, La Paz Bolivia.</p>
            </div>
        </footer> 
            <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html>
