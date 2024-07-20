@extends('layouts.admin')

@section('content')
    <title>Home</title>
    <div class="container-fluid bg-fundo">
        <div class="row no-gutters ">
            <div class="col-7 bg-fundo-img-login">
                <img src="{{ asset('img/img-login.png') }}" alt="Imagem Login" class="img-login">
            </div>            
            <div class="col-5 bg-login">
                <form class="text-center txt-branco form-login">
                    <h1 class="text-center">Login</h1>
                    <div class="form-group">
                        <label for="login" class="text-left">Matrícula/MASP/CPF</label>
                        <input type="number" class="form-control" id="login" placeholder="Usuário">
                    </div>
                    <div class="form-group col-12">
                        <label for="senha" class="text-left">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-entrar">Logar</button>
                </form>
            </div>
            
        </div>
    </div>  
@endsection
