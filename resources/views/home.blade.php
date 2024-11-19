@extends('layout.menu')
@section('content')



    <div class="container-fluid" style="overflow: hidden"> <!--Container-->
        <div class="row" style="overflow: hidden"><!--Baner inicial -->
            <div class="col"> <!--Coluna 1-->
                <h3 class="h3-banner">ZooRações</h3>
                <h1 class="texto-gradiente">Cuide do Bem-Estar do seu <br> Amigo de 4 patas !</h1>
                <h1 class="texto-gradiente "></h1>
                <p class="paragrafo-gradiente ">Encontre a melhor seleção de rações e medicamentos para <br> manter seu animal
                    saudável e feliz.</p>
            </div>
            <div class="col">
                <div class="capsula float-end">
                    <img src="/images/dogs.png" class="img-dog  " alt="">
                </div>
            </div>
        </div>




    </div><!--Fim container-->


    <div class="carrocel" style="overflow: hidden"> <!--Início carrocel-->

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="div-arredondada">
                        <h2 style="overflow: hidden">Seu pet é bem cuidado aqui</h2>
                      </div>
                </div>
                <div class="carousel-item">
                    <div class="div-arredondada">
                        Seu cu
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="div-arredondada">
                        minha pica
                      </div>
                </div>
            </div>
            <a class="carousel-control-prev" style="overflow: hidden" href="#carouselExampleControls" role="button"
                data-slide="prev">
                <span class="sr-only color-prox"><img class="seta-esquerda" src="/images/seta-carrocel-esquerda.png" width="180" alt=""></span>
            </a>
            <a class="carousel-control-next" style="overflow: hidden" href="#carouselExampleControls" role="button"
                data-slide="next">
                <span class="sr-only color-prox"><img class="seta-direita" src="/images/seta-carrocel-direita.png" width="180" alt=""></span>
            </a>
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
