@extends('welcome')

@section('content')
    <title>Home</title>
    <nav class="navbar bg-success bg-gradienttle">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://img.freepik.com/vetores-premium/design-de-logotipo-de-clinica-e-saude-com-sinal-de-amor_514368-7.jpg?w=740" alt="Bootstrap" width="30" height="24">
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="imagens/Site-Ciclo_Home_Banner-Destaque2_1080x1500px_mob.webp" alt="Imagem" class="img-fluid">
            </div>
            <div class="col-md-6">
                <form class="text-center">
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
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Me lembrar
                            </label>
                        </div>
                        <div>
                            <a class="text-dark" href="#">Esqueci minha senha</a>
                        </div>
                    </div>                    
                    <button type="submit" class="btn btn-primary mt-3">Entrar</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection
