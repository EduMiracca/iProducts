@extends('layouts.app')

@section('content')

    <div class="login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 style="color: #083b66;">Login</h2>
                    <p>Ainda não tem conta?&nbsp;<a href="registration.php" style="color: #f2af58;">Cadastre-se!</a>
                    </p>
                </div>
                <form>
                    <div class="form-group"><label for="email">E-mail</label><input class="form-control item"
                            type="email" id="email" required=""></div>
                    <div class="form-group"><label for="password">Senha</label><input class="form-control"
                            type="password" id="password" required=""></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label
                                class="form-check-label" for="checkbox">Lembre-me</label></div>
                    </div><button class="btn btn-primary btn-block" type="submit"
                        style="background-color: #083b66;border-color: #083b66;">Login</button>
                </form>
            </div>
        </section>
    </div>
    
@endsection