@extends('layouts.app')
@section('content')
<div class="container-fluid cover-slides" >
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000" >
                <img src="img/sl1.jpg" id="slide" class="d-block w-100 " alt="..." height="500em">
                
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/sl2.jpg" id="slide" class="d-block w-100" alt="..." height="500em">
                
            </div>
            <div class="carousel-item"data-bs-interval="2000">
                <img src="img/rodmy.jpg" id="slide" class="d-block w-100" alt="..." height="500em">
                
            </div>
            <section id="der">
                <div class="carousel-caption d-none d-md-block   text-white transparent">
                    <h2 class="m-b-20"><strong>ADAPTANDO TUS NECESIDADES A NUESTROS OBJETIVOS</strong></h2>
                    <p class="m-b-40">Somos una empresa de servicios en el área eléctrica y electrónica,
                         conformada por profesionales con amplia experiencia en la industria.</p>
                </div>
            </section>
           
        </div>
    </div>
</div>
<!-- Start About -->
<br>
<div class="contenedor_img">
    
    <div class="row align-items-center">
      <div class="col">
            <img src="img/4.jpg" class=" conborde " alt="..." >
            <h5></h5>
      </div>
      <div class="col">
        
            <img src="img/4.jpg" class=" conborde" alt="..." >
      </div>
      <div class="col">
            <img src="img/4.jpg" class=" conborde" alt="...">
      </div>
    </div>
    
  </div>
<!-- End About -->

<!-- Start QT -->

@endsection
