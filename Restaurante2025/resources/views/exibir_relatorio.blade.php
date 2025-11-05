<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sol de Verão - Relatórios</title>
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

    <section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Relatórios
                    </h1>

                    <br>

                    <h4 class="text-white">
                        Aqui você verá uma lista com seus relatórios!
                    </h4>

                    <br>

                    <p class="text-white link-nav"><a href="homepage">Início </a> <span
                            class="lnr lnr-arrow-right"></span> <a href="exibir_pratos"> Relatórios</a></p>
                </div>
            </div>
        </div>
    </section>

    <div class="bloco">
        <div class="titulo">
            <h1>RELATÓRIOS</h1>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Código(Pedido)</th>
                        <th>RG</th>
                        <th>Código(Prato)</th>
                        <th>Quantidade</th>
                        <th>Data de cadastro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($relatorios as $relatorio)
                        <tr>
                            <td>{{ $relatorio->id_compra }}</td>
                            <td>{{ $relatorio->id_fornecedor ?? 'N/A' }}</td>
                            <td>{{ $relatorio->preco }}</td>
                            <td>{{ $relatorio->data }}</td>
                            <td>{{ $relatorio->nota_fiscal ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

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