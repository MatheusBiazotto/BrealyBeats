<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Brealy Shop</title>
        <link rel="icon"
            type="image/jpg"
            href="{{asset('assets/images/icone.jpg')}}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- CSS do site e CDN Bootstrap -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    </head>
    <body class="corpo">
        <nav class="menu"> <!-- INÍCIO MENU -->
            <a href="{{ route('index') }}" class="menuLinks">Início</a>
            <a href="{{ route('beats') }}" class="menuLinks">Beats</a>
            <a href="{{ route('categorias') }}" class="menuLinks">Categorias</a>
            <a href="{{ route('index') }}#sobrenos" class="menuLinks">Sobre nós</a>
            <div>
                <a href="{{ route('carrinho') }}" class="iconeCarrinho"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg></a>
                <a href="/login" class="botoesMenu">Fazer Login!</a>
                <a href="/cadastro" class="botoesMenu">Cadastrar-se!</a>
            </div>
            <hr>
        </nav> <!-- FIM DO MENU -->

        <!-- COMEÇO DOS CONTEÚDOS DE OUTRAS PÁGINAS -->
        @yield("conteudo")
        <hr>
        <!-- FIM DOS CONTEÚDOS DE OUTRAS PÁGINAS -->


        <footer class="rodape"> <!-- COMEÇO RODAPÉ -->
            <div class="rodapeLinha1">
                <p class="tituloRodape">BrealyShop</p>
                <a href="{{ route('beats') }}">Beats</a>
                <a href="">Categorias</a>
                <a href="{{ route('index') }}#sobrenos">Sobre nós</a>
                <a href="{{ route('index') }}#sobrenos">Nosso objetivo</a>
            </div>
            <div class="rodapeLinha2">
                <p class="tituloRodape">Suporte</p>
                <div>R. Odenir Silveira, 255 - Mogi Guaçu, SP - Brasil</div>
                <div>Atendimento presencial das 09h às 17h</div>
                <div>Suporte online 24/7</div>
                <a href="">Suporte</a>
            </div>
            <div class="rodapeLinha3">
                <p class="tituloRodape">Mídias Sociais</p>
                <a href="">Facebook</a>
                <a href="">Instagram</a>
                <a href="">Twitter</a>
                <a href="">LinkedIn</a>
            </div>
        </footer> <!-- FIM RODAPÉ -->
    </body>
</html>
