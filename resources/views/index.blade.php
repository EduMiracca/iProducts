@extends('layouts.app')

@section('content')

    <div class="landing-page">
        <section class="clean-block clean-hero"
            style="background-image: url(&quot;img/man-791049_1920.jpg&quot;);color: rgba(8,59,102,0.52);height: 300px;opacity: 0.84;filter: blur(0px) grayscale(16%);">
            <div class="text">
                <h2>iProducts. A Apple perto de você.</h2>
                <p style="width: 500px;">Na iProducts você encontra tudo em celulares, tablets e notebooks da Apple</p>
                <a class="btn btn-outline-light btn-lg" role="button" href="#">Saiba Mais</a>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <a type="button" class="btn btn-outline-secondary" href="{{ url('/catalogo') }}">VEJA OS MELHORES
                        PRODUTOS</a>
                    <p>Tudo muda quando você muda para a Apple</p>
                </div>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="w-100 d-block" src="img/iphone-cenario1.jpg"
                                alt="Slide Image">
                            <div class="carousel-caption">
                                <a class="btn btn-success btn-lg" role="button" href="{{ url('/catalogo') }}">iPhones</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="img/ipad-cenario.jpg" alt="Slide Image">
                            <div class="carousel-caption">
                                <a class="btn btn-success btn-lg" role="button" href="{{ url('/catalogo') }}">iPads</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="img/macbook-cenario.jpg"
                                alt="Slide Image">
                            <div class="carousel-caption">
                                <a class="btn btn-success btn-lg" role="button" href="{{ url('/catalogo') }}">iMacs</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span
                                class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a
                            class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span
                                class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="clean-block features">
            <div class="container">
                <div class="block-heading" style="margin-bottom: 90px;">
                    <h2 style="color: #083b66;">Sobre</h2>
                    <p style="max-width: 500px;">iProducts é uma rede de especialistas que tem a missão de levar a Apple
                        perto de você. Como revendedora premium,<br>a iProducts entrega todos os produtos Apple.<br></p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box">
                        <i class="material-icons icon">people</i>
                        <div class="offset-1 col-11">
                            <h4>Especialistas Apple</h4>
                            <p>Nossa equipe atenciosa e capacitada está preparada para tirar todas as suas dúvidas.</p>
                        </div>
                    </div>
                    <div class="col-md-5 feature-box">
                        <i class="material-icons icon">desktop_mac</i>
                        <div class="offset-1 col-11">
                            <h4>Tudo Apple</h4>
                            <p>Oferecemos as linhas Mac, iPad e iPhones.</p>
                        </div>
                    </div>
                    <div class="col-md-5 feature-box">
                        <i class="material-icons icon">build</i>
                        <div class="offset-1 col-11">
                            <h4>Podemos Consertar</h4>
                            <p>Como assistência técnica autorizada Apple, conte conosco para reparos e soluções.</p>
                        </div>
                    </div>
                    <div class="col-md-5 feature-box">
                        <i class="material-icons icon">autorenew</i>
                        <div class="offset-1 col-11">
                            <h4>Reciclagem gratuita</h4>
                            <p>Compre um Mac, iPad ou iPhone e reciclaremos o seu dispositivo antigo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @endsection
