<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sol de Verão - Início</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>

<body>
    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div id="logo">
                        <a href="homepage"><img src="img/logo.png" alt="" title="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-center d-flex">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="homepage">Início</a></li>
                        <li class="menu-has-children"><a href="">Cadastros</a>
                            <ul>
                                <li><a href="cadastro_pedidos">Pedidos</a></li>
                                <li><a href="cadastro_ingredientes">Ingredientes</a></li>
                                <li><a href="cadastro_pratos">Pratos</a></li>
                            </ul>
                        </li>

                        <li class="menu-has-children"><a href="">Gerenciamento</a>
                            <ul>
                                <li><a href="exibir_pedidos">Pedidos</a></li>
                                <li><a href="exibir_ingredientes">Ingredientes</a></li>
                                <li><a href="exibir_pratos">Pratos</a></li>
                                <li><a href="exibir_relatorio">Relatórios</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="banner-area">
        <div class="banner-bg"></div>
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-12 banner-content">
                    <h1 class="text-white text-center">“ONDE CADA GOLE CONTA UMA HISTÓRIA”</h1>

                    <div class="d-flex justify-content-center">
                        <a href="#sobre" class="primary-btn text-uppercase">Conheça melhor</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-about-area section-gap" id="sobre">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 home-about-left">
                    <h1>Sobre o sistema</h1>
                    <p>
                        Seja bem-vindo, colega! Para que você desempenhe seu papel da melhor forma e ofereça aos nossos
                        clientes o mais alto nível de serviço, criamos este sistema de cadastro de pedidos. Ele foi
                        desenvolvido para agilizar nossas entregas e automatizar o processo de registro de pedidos,
                        tornando nosso trabalho mais eficiente e preciso.
                    </p>
                    <a href="#funcionalidades" class="primary-btn">Ver Funcionalidades</a>
                </div>
                <div class="col-lg-6 home-about-right">
                    <img class="img-fluid" src="img/sobre.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="services-area pb-120" id="funcionalidades">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Explore as funcionalidades do sistema</h1>
                        <p class="subtitle">Veja algumas das coisas que você pode fazer!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="funcionalidades-area">
                        <div class="thumb">
                            <img src="img/funcionalidades/1.jpg" alt="">
                        </div>
                        <h4>Cadastrar um pedido</h4>
                        <p>
                            Este sistema de cadastro de pedidos permite registrar solicitações de forma eficiente e
                            organizada. Você pode visualizar cada pedido, acompanhar o status de preparo e envio,
                            garantindo que os clientes recebam seus pratos no tempo esperado e com qualidade.
                        </p>
                        <a href="cadastro_pedidos" class="primary-btn">Cadastre já!</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="funcionalidades-area">
                        <div class="thumb">
                            <img src="img/funcionalidades/2.jpg" alt="">
                        </div>
                        <h4>Cadastrar ingredientes</h4>
                        <p>
                            Este sistema foi desenvolvido para otimizar o cadastro de ingredientes usados em nossos
                            pratos. Com ele, é possível registrar novos itens, ajustar quantidades e acompanhar o
                            estoque, garantindo que a cozinha esteja sempre abastecida e pronta para atender às
                            demandas.
                        </p>
                        <a href="cadastro_ingredientes" class="primary-btn">Cadastre já!</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="funcionalidades-area">
                        <div class="thumb">
                            <img src="img/funcionalidades/3.jpg" alt="">
                        </div>
                        <h4>Cadastrar pratos</h4>
                        <p>
                            Este sistema foi criado para facilitar o cadastro de pratos de maneira prática e organizada.
                            Com ele, você pode adicionar novas receitas ao cardápio, modificar detalhes como
                            ingredientes, descrição e preço, mantendo todas as opções sempre atualizadas e acessíveis.
                        </p>
                        <a href="cadastro_pratos" class="primary-btn">Cadastre já!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-area">
        <div class="footer-widget-wrap">
            <div class="container">
                <div class="row section-gap">
                    <div class="horarios">
                        <div class="single-footer-widget">
                            <h4>Entre em contato!</h4>

                            <p>
                            <h5>Celular:</h5>
                            (18) 99653-8306
                            </p>

                            <p>
                            <h5>Email:</h5>
                            9923@fai.com.br
                            </p>

                            <p>
                            <h5>Endereço:</h5>
                            Rua Joaquim Alves Landim, 283 - Lucélia/SP
                            </p>
                        </div>
                    </div>

                    <div class="horarios">
                        <div class="single-footer-widget">
                            <h4>Horário de funcionamento</h4>
                            <ul class="hr-list">
                                <li class="d-flex justify-content-between">
                                    <span>Segunda - Sexta</span> <span>09:00 - 18:00</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Sábado</span> <span>09:00 - 22:00</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Domingo</span> <span>09:00 - 20:00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.10/js/superfish.min.js"
        integrity="sha512-gdhtclwUZCkHSSb/Q79++RssWL4eDLKHO15TC7kR/XnvlNyzcvZDRLn4BIuxadMWGIxPuj/IbFBInMpYockVCA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>