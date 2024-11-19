@extends('layout.menu')
@section('corpo')
<link rel="stylesheet" href="/css/home.css">
    <div class="container-fluid" style="overflow: hidden"> <!--Container-->
        <div class="row" style="overflow: hidden"><!--Baner inicial -->
            <div class="col"> <!--Coluna 1-->
                <h3 class="h3-banner">ZooRações</h3>
                <h1 class="texto-gradiente">Cuide do Bem-Estar do seu <br> Amigo de 4 patas !</h1>
                <h1 class="texto-gradiente "></h1>
                <p class="paragrafo-gradiente ">Encontre a melhor seleção de rações e medicamentos para <br> manter seu
                    animal
                    saudável e feliz.</p>
            </div>
            <div class="col">
                <div class="capsula float-end">
                    <img src="/images/dogs.png" class="img-dog  " alt="">
                </div>
            </div>
        </div>




    </div><!--Fim container-->


    <div class="" style="overflow: hidden"> <!--Início carrocel-->

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="baner-home"></div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div><!-- Fim Carrocel-->

    <div class="container mt-12 ">
        <div class="position relative">
            <div class="shadow p-4 mx-auto" style="max-width:100% ">
                <div class="position-relative me-2  story">
                    <img src="" alt="">
                </div>
                <div class="storys-texto ">Equinos </div>
            </div>
        </div>
    @endsection
