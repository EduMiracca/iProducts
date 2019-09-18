@extends('layouts.master')

@section('content')

    <div class="shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 style="color: #083b66;">Carrinho de Compra</h2>
                    <p>Confira seus produtos comprados.</p>
                </div>
                <div class="content">
                    <div class="row no-gutters">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image"
                                                    src="img/ipad-cenario.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#"
                                                style="color: #f2af58;">Lorem Ipsum dolor</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">5 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">4GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">32GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block"
                                                for="quantity">Quantidade</label><input type="number" id="number"
                                                class="form-control quantity-input" value="1"><i class="fa fa-remove"
                                                style="margin-top: 10px;"></i>
                                            <p style="font-size: 14px;color: #74d14c;">remove</p>
                                        </div>
                                        <div class="col-6 col-md-2 price"><span>$120</span></div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image"
                                                    src="img/iphone-cenario.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#"
                                                style="color: #f2af58;">Lorem Ipsum dolor</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">5 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">4GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">32GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block"
                                                for="quantity">Quantidade</label><input type="number" id="number"
                                                class="form-control quantity-input" value="1"><i class="fa fa-remove"
                                                style="margin-top: 10px;"></i>
                                            <p style="font-size: 14px;color: #74d14c;">remove</p>
                                        </div>
                                        <div class="col-6 col-md-2 price"><span>$120</span></div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image"
                                                    src="img/macbook-cenario.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#"
                                                style="color: #f2af58;">Lorem Ipsum dolor</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">5 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">4GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">32GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block"
                                                for="quantity">Quantidade</label><input type="number" id="number"
                                                class="form-control quantity-input" value="1"><i class="fa fa-remove"
                                                style="margin-top: 10px;"></i>
                                            <p style="font-size: 14px;color: #74d14c;">remove</p>
                                        </div>
                                        <div class="col-6 col-md-2 price"><span>$120</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>resumo</h3>
                                <h4><span class="text">Subtotal</span><span class="price">$360</span></h4>
                                <h4><span class="text">Desconto</span><span class="price">$0</span></h4>
                                <h4><span class="text">Frete</span><span class="price">$0</span></h4>
                                <h4><span class="text">Total</span><span class="price">$360</span></h4>
                                <div style="margin-top: 15px;"><input class="border rounded-0" type="text"
                                        style="width: 309.984px;height: 30px;"
                                        placeholder="inserir código de desconto"><button
                                        class="btn btn-primary btn-block btn-sm d-xl-flex flex-row align-items-end justify-content-xl-center align-items-xl-center"
                                        type="button"
                                        style="background-color: #f6f6f6;font-size: 12px;color: #083b66;width: 200px;height: 30px;margin-top: 5px;padding-top: 0px;padding-bottom: 0px;">Aplicar
                                        Desconto</button></div><button class="btn btn-primary btn-block btn-lg"
                                    type="button" style="background-color: #083b66;">Pagamento</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
@endsection