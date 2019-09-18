@extends('layouts.master')

@section('content')

    <div class="contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 style="color: #083b66;">Contato</h2>
                    <p>Preencha o formulário abaixo.</p>
                </div>
                <form>
                    <div class="form-group"><label>Nome</label><input class="form-control" type="text" required="">
                    </div>
                    <div class="form-group"><label>Assunto</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label>E-mail</label><input class="form-control" type="email" required="">
                    </div>
                    <div class="form-group"><label>Mensagem</label><textarea class="form-control" style="height: 120px;"
                            autofocus=""></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit"
                            style="background-color: #083b66;">Enviar</button></div>
                </form>
            </div>
        </section>
    </div>
    
@endsection