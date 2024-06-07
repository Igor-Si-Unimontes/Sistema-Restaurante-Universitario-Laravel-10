@extends('layouts.admin')

@section('content')
    <title>Home</title>
    <nav class="navbar bg-gradient-custom">
        <div class="container">
            <a class="navbar-brand" href="#" style="margin-left: 95px;">
                <img src="{{ asset('img/logo.png') }}" alt="Logo da Clínica" width="110" height="70">
            </a>
        </div>
    </nav>
   
     <div class="background-image-login">
        <div class="container bg-login-content">
            <div class="row justify-content-center">
                <div class="col-md-4 bg-fundo-img-login">
                    <img src="{{ asset('img/imagem-login.png') }}" alt="Imagem Login" width="200%">
                </div>
                <div class="col-md-6 bg-login">
                    <form class="text-center txt-branco">
                        <h1>Login</h1>
                        <div class="form-group">
                            <label for="login"></label>
                            <input type="text" class="form-control" id="login" placeholder="Usuário">
                        </div>
                        <div class="form-group">
                            <label for="senha"></label>
                            <input type="password" class="form-control" id="senha" placeholder="Senha">
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label txt-branco" for="flexCheckDefault">
                                    Me lembrar
                                </label>
                            </div>
                            <div class="mt-4">
                                <a class="txt-branco" href="#">Esqueci minha senha</a>
                            </div>
                        </div>                    
                        <button type="submit" class="btn btn-entrar">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
