@extends('layouts.master')

@section('content')

    <div class="product-page">
        <section class="clean-block clean-product dark">
            <div class="container">
                <div class="block-heading">
                    <h2>Detalhes do Produto</h2>
                    <p>Veja detalhes do produto escolhido.</p>
                </div>
                <div class="block-content">
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery">
                                    <div class="sp-wrap">
                                        <a href="#">
                                            <img class="img-fluid d-block mx-auto" src="img/ipad-cenario.jpg">
                                        </a>
                                        <a href="#">
                                            <img class="img-fluid d-block mx-auto" src="img/ipad-cenario.jpg">
                                        </a>
                                        <a href="#"><img class="img-fluid d-block mx-auto" src="img/ipad-cenario.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-xl-flex justify-content-xl-end">
                                    <p style="margin-right: 20px;color: #083b66;">Compartilhar</p><a href="#"
                                        style="color: #083b66;"><i class="fas fa-share"
                                            style="font-size: 25px;"></i></a>
                                </div>
                                <div class="info">
                                    <h3>Lorem Ipsum</h3>
                                    <div class="price">
                                        <h3>$300.00</h3>
                                    </div><a class="btn btn-primary" role="button" href="payment-page.php"
                                        style="background-color: #083b66;"><i class="icon-basket"></i>Adicione ao
                                        carrinho</a>
                                    <div class="summary" style="margin-top: 20px;">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc,
                                            pretium at augue at, convallis pellentesque ipsum. Vestibulum diam risus,
                                            sagittis at fringilla at, pulvinar vel risus. Vestibulum dignissim
                                            eu nulla eu imperdiet. Morbi mollis tellus a nunc vestibulum consequat.
                                            Quisque tristique elit et nibh dapibus sodales. Nam sollicitudin a urna sed
                                            iaculis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div>
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab"
                                        id="description-tab" href="#description">Descrição</a></li>
                                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab"
                                        id="specifications-tabs" href="#specifications">Especificações</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show description" role="tabpanel" id="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna,
                                        dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum
                                        dolor sit amet, consectetur adipiscing elit.</p>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <figure class="figure"><img class="img-fluid figure-img"
                                                    src="assets/img/tech/image3.png"></figure>
                                        </div>
                                        <div class="col-md-7">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna,
                                                dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7 right">
                                            <h4>Lorem Ipsum</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna,
                                                dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="col-md-5">
                                            <figure class="figure"><img class="img-fluid figure-img"
                                                    src="assets/img/tech/image3.png"></figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active fade show specifications" role="tabpanel"
                                    id="specifications">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="stat">Display</td>
                                                    <td>5.2"</td>
                                                </tr>
                                                <tr>
                                                    <td class="stat">Camera</td>
                                                    <td>12MP</td>
                                                </tr>
                                                <tr>
                                                    <td class="stat">RAM</td>
                                                    <td>4GB</td>
                                                </tr>
                                                <tr>
                                                    <td class="stat">OS</td>
                                                    <td>iOS</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="reviews">
                                    <div class="reviews">
                                        <div class="review-item">
                                            <div class="rating"><img src="star.svg"><img src="star.svg"><img
                                                    src="star.svg"><img src="star.svg"><img src="star-empty.svg"></div>
                                            <h4>Incredible product</h4><span class="text-muted"><a href="#">John
                                                    Smith</a>, 20 Jan 2018</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue
                                                nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum
                                                dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="reviews">
                                        <div class="review-item">
                                            <div class="rating"><img src="star.svg"><img src="star.svg"><img
                                                    src="star.svg"><img src="star.svg"><img src="star-empty.svg"></div>
                                            <h4>Incredible product</h4><span class="text-muted"><a href="#">John
                                                    Smith</a>, 20 Jan 2018</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue
                                                nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum
                                                dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="reviews">
                                        <div class="review-item">
                                            <div class="rating"><img src="star.svg"><img src="star.svg"><img
                                                    src="star.svg"><img src="star.svg"><img src="star-empty.svg"></div>
                                            <h4>Incredible product</h4><span class="text-muted"><a href="#">John
                                                    Smith</a>, 20 Jan 2018</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue
                                                nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum
                                                dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    @endsection