<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zoo Rações</title>
    <link rel="stylesheet" href="/css/styleMenu.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div id="navbar">
        <!--Navbar-->
        <header>
            <a href="#">
                <img src="/images/5-sem-bg.png" class="logo-img" alt="Imagem da logo do Zoo Rações" />
                <!--Altura da imagem está mudando o tamanho do padding-->
            </a>

            <div class="wrapper-search" style="overflow: hidden">
                <label for="search-input" style="overflow: hidden">
                    <span class="material-symbols-outlined" style="overflow: hidden">Search</span>
                </label>
                <input type="text" id="search-input" placeholder="Pesquisar" />
            </div>

            <nav>
                <ul>
                    <li>Atendimento</li>
                    <li>Login e Registrar</li>
                    <li>Sobre nós</li>
                </ul>
            </nav>

            <div class="actions">
                <!-- <img src="/images/cart.png" />
          <img src="/images/menu.png" class="menu-button" /> -->
                <button id="list" onclick="openModal()">
                    <i class="ph ph-list"></i>
                </button>
                <button id="cart">
                    <i class="ph ph-shopping-cart"></i>
                </button>
            </div>
        </header>
        <div class="menu">
            <div class="links">
                <a href="#">Medicamentos</a>
                <a href="#">Arames e Ferragens</a>
                <a href="#">Hormônios</a>
                <a href="#">Pets</a>
                <a href="#">Rações e Petiscos</a>
                <a href="#">Pragas e Insetos</a>
                <a href="#">Casa e Piscina</a>
                <a href="#">Ofertas</a>
            </div>
        </div>
    </div>
    <div id="modal" class="close">
        <div class="options">
            <button onclick="closeModal()">
                <i class="ph ph-x"></i>
            </button>
            <a href="#">Atendimento</a>
            <a href="#">Login e Registrar</a>
            <a href="#">Sobre nós</a>
            <a href="#">Medicamentos</a>
            <a href="#">Arames e Ferragens</a>
            <a href="#">Hormônios</a>
            <a href="#">Pets</a>
            <a href="#">Rações e Petiscos</a>
            <a href="#">Pragas e Insetos</a>
            <a href="#">Casa e Piscina</a>
            <a href="#">Ofertas</a>
        </div>
    </div>
    <script src="/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    @yield('corpo')

</body>

</html>
