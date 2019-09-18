@extends('layouts.master')

@section('content')

    <div class="payment-page">
        <section class="clean-block payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 style="color: #083b66;">Pagamento</h2>
                    <p>Confira seu pedido.</p>
                </div>
                <form>
                    <div class="products">
                        <h3 class="title">Confira</h3>
                        <div class="item"><span class="price">$200</span>
                            <p class="item-name">Product 1</p>
                            <p class="item-description">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="item"><span class="price">$120</span>
                            <p class="item-name">Product 2</p>
                            <p class="item-description">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="total"><span>Total</span><span class="price">$320</span></div>
                    </div>
                    <div class="card-details">
                        <h3 class="title">Detalhes do Cartão de Crédito</h3>
                        <div class="form-row">
                            <div class="col-sm-7">
                                <div class="form-group"><label for="card-holder">NOME DO CARTÃO</label><input
                                        class="form-control" type="text" placeholder="Nome Cartão"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group"><label>DATA DE EXPIRAÇÃO</label>
                                    <div class="input-group expiration-date"><input class="form-control" type="text"
                                            placeholder="MM"><input class="form-control" type="text" placeholder="AA">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group"><label for="card-number">NÚMERO DO CARTÃO</label><input
                                        class="form-control" type="text" id="card-number" placeholder="Número Cartão">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group"><label for="cvc">CVV</label><input class="form-control"
                                        type="text" id="cvc" placeholder="CVV"></div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group"><button class="btn btn-primary btn-block" type="submit"
                                        style="background-color: #083b66;">Finalizar</button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    
    @endsection