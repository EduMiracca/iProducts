<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="icon" type="image/png" sizes="176x60" href={{url("img/logo_store.png")}}>
    <link rel="stylesheet" href={{url("css/bootstrap.min.css")}}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href={{url("fonts/fontawesome-all.min.css")}}>
    <link rel="stylesheet" href={{url("fonts/font-awesome.min.css")}}>
    <link rel="stylesheet" href={{url("fonts/ionicons.min.css")}}>
    <link rel="stylesheet" href={{url("fonts/material-icons.min.css")}}>
    <link rel="stylesheet" href={{url("fonts/simple-line-icons.min.css")}}>
    <link rel="stylesheet" href={{url("fonts/fontawesome5-overrides.min.css")}}>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href={{url("css/smoothproducts.css")}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <link rel="stylesheet" href={{url("css/style.css")}}>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a href="{{ url('/') }}"><img class="d-flex float-left"
                    src="img/logo_store.png" style="width: 140px;"></a><a class="navbar-brand logo"
                href="#"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span
                    class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="{{ url('/') }}" style="color: #f2af58;">Home</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="{{ url('/catalogo') }}">Produtos</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="{{ url('/contato') }}">Contato</a>
                    </li>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/register') }}">{{ __('Cadastre-se') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="page">
            @yield('content')
        </main>
        <footer>
            <div class="footer-basic">
                <div class="social"><a href="#"><i class="icon ion-social-instagram" style="color: #083b66;"></i></a><a
                        href="#"><i class="icon ion-social-snapchat" style="color: #083b66;"></i></a><a href="#"><i
                            class="icon ion-social-twitter" style="color: #083b66;"></i></a>
                    <a href="#"><i class="icon ion-social-facebook" style="color: #083b66;"></i></a>
                </div>
                <ul class="list-inline" style="color: #f2af58;">
                    <li class="list-inline-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="list-inline-item"><a href="{{ url('/catalogo') }}">Produtos</a></li>
                    <li class="list-inline-item"><a href="{{ url('/contato') }}">Contato</a></li>
                </ul>
                <p class="copyright" style="color: #083b66;">CNPJ: 00.000.000/0000-00 - Avenida das Nações, 1000 - São Paulo
                    - SP - CEP: 01001-010</p>
                <div class="d-xl-flex align-content-center justify-content-xl-center align-items-xl-center"
                    style="padding-top: 10px;"><button class="btn btn-outline-light btn-sm text-center d-xl-flex flex-row"
                        data-toggle="modal" data-target="#modal1" type="button" style="color: #083b66;"><i
                            class="fa fa-file-text" style="margin-right: 15px;"></i>Política de Privacidade</button></div>
                <div class="modal fade text-justify" role="dialog" tabindex="-1" id="modal1" data-toggle="modal"
                    data-target="#modal1" href="#" type="button">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-footer">
                                <div>
                                    <h2>Política de Privacidade</h2>
                                    <p>Por este instrumento eletrônico, iProducts, pessoa jurídica com sede na cidade de São
                                        Paulo – SP, inscrita no CNPJ sob o nº 00.000.000/0000-00 (doravante, “iProducts”),
                                        informa a sua POLÍTICA DE PRIVACIDADE, conforme as disposições abaixo discriminadas:
                                    </p>
                                    <p><strong>Noções gerais:</strong><br>Este instrumento traz a política de privacidade
                                        dos serviços prestados pela iProducts, mostrando a forma como os dados e informações
                                        pessoais de cada USUÁRIO serão administrados
                                        pela iProducts.<br>A iProducts obtém informações dos USUÁRIOS de duas maneiras:
                                        cadastros e cookies.</p>
                                    <p><strong>Cadastro – informações e dados:</strong><br>Para se tornar USUÁRIO da
                                        iProducts, é necessário cadastrar-se e informar seus dados pessoais completos e
                                        exatos. A iProducts poderá confirmar os dados
                                        pessoais informados e consultar entidades públicas, companhias especializadas ou
                                        bancos de dados, estando desde já expressamente autorizada. A informação que a
                                        iProducts obtiver destas entidades será tratada
                                        de forma confidencial.<br>Para usufruir dos serviços da iProducts, é necessária a
                                        efetuação de cadastro, no qual haverá o fornecimento de alguns dados pessoais, os
                                        quais serão usados como forma de registro
                                        e controle pela iProducts.<br>Poderão ser coletados os seguintes dados pessoais,
                                        cuja veracidade é de responsabilidade do USUÁRIO:-NOME COMPLETO-CPF/CNPJ– EMAIL–
                                        LOGIN– SENHACabe ao USUÁRIO manter suas informações
                                        e dados pessoais atualizados.<br>A iProducts coleta e armazena automaticamente
                                        algumas informações sobre a atividade dos usuários cadastrados e visitantes de seu
                                        site. Tal informação pode incluir a URL de onde
                                        eles provêm (seja ela da própria iProducts ou não), a que URL acessaram em seguida
                                        (seja ela da própria iProducts ou não), o navegador que estão a utilizar e seus IPs
                                        de acesso, as páginas visitadas,
                                        as buscas realizadas, dentre outras informações poderão ser armazenadas e
                                        retidas.<br>Os contatos efetuados pelo USUÁRIO com a iProducts pelo atendimento
                                        online ficarão gravados no sistema, tendo acesso a eles
                                        alguns funcionários habilitados da iProducts.</p>
                                    <p><strong>Cookies:</strong><br>A iProducts coleta informações por meio de cookies, que
                                        são as informações enviadas pelo servidor da iProducts ao computador do USUÁRIO para
                                        identificá-lo. Os cookies servem
                                        unicamente para controle interno de audiência e de navegação e jamais para
                                        controlar, identificar ou rastrear preferências do internauta, exceto quando este
                                        desrespeitar alguma regra de segurança ou exercer alguma atividade
                                        prejudicial ao bom funcionamento do site, como, por exemplo, tentativas de hackear o
                                        serviço. A aceitação dos cookies pode ser livremente alterada na configuração de seu
                                        navegador.</p>
                                    <p><strong>Segurança de Informações:</strong><br>A política de privacidade da iProducts
                                        visa a garantir que quaisquer informações e dados dos usuários não serão fornecidos,
                                        publicados ou comercializados em quaisquer circunstâncias.
                                        <br>Os dados pessoais informados à iProducts são armazenados em um banco de dados
                                        reservado e com acesso restrito a alguns funcionários habilitados, que são
                                        obrigados, por contrato, a manter a confidencialidade das informações e não
                                        utilizá-las inadequadamente.</p>
                                    <p><strong>Senha:</strong><br>Para acesso dos serviços reservados unicamente aos
                                        utilizadores devidamente registrados, estes irão dispor de uma senha pessoal. Com
                                        ela poderão comprar, acessar sua conta pessoal, dentre outras atividades. Esta
                                        senha,
                                        que é escolhida pelo próprio USUÁRIO, deve ser mantida sob absoluta
                                        confidencialidade e, em nenhum caso, deverá ser revelada ou compartilhada com outras
                                        pessoas.</p>
                                    <p><strong>Alterações da Política de Privacidade:</strong><br>A iProducts pode alterar
                                        esta Política a qualquer tempo, com ou sem aviso prévio. No entanto, se esta
                                        Política for alterada de forma.</p>
                                </div>
                            </div><button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                <p class="copyright">iProducts © 2019</p>
        </footer>
    
        <script defer src={{url("js/jquery.min.js")}}></script>
        <script defer src={{url("bootstrap/js/bootstrap.min.js")}}></script>
        <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script defer src={{url("js/smoothproducts.min.js")}}></script>
        <script defer src={{url("js/theme.js")}}></script>
        <script defer src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
        <script defer src={{url("js/filter.js")}}></script>
    </body>
    
    </html>