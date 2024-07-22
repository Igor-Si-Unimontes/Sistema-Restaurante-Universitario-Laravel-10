<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('CLIENT_NAME', 'Ru System') }}</title>
    <link href="{{ asset('css/ru.css') }}" rel="stylesheet" type="text/css">
    @yield('scripts')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    @yield('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/ru.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    @livewireStyles
</head>

<body>
    <div id="full-app-container">
        <nav class="navbar navbar-expand-lg navbar-light bg-fundo ">
            <a wire:navigate class="navbar-brand" href="{{ route('home.index') }}">
                <img src="{{ asset('img/favicon-principal.png') }}" style="margin-left: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                <ul class="navbar-nav" style="margin-right: 40px;">
                    <li class="nav-item">
                        <div class="nav-link" style="color: #fff">Olá, {{ session()->get('funcao') }}</div>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-menu">
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav" style="margin-right: 40px;">
                    <li class="nav-item me-3">
                        <a wire:navigate class="nav-link text-black" href="#">
                            Página Inicial
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a wire:navigate class="nav-link text-black" href="#">
                            Lista de Usuários
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a wire:navigate class="nav-link text-black" href="#">
                            Cadastrar
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <form action="#" method="post" id="logout">
                            @csrf
                            @method('post')
                            <a href="#" onclick='if(confirm("Você realmente deseja saír?")) $("#logout").submit()'
                                class="nav-link text-black">Sair</a>
                        </form>
                    </li>

                    <!-- colocar arroba aqui if(Auth::user()->permissao == 1)-->
                    <!--
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Relatórios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a wire:navigate class="dropdown-item" href="#">Ranking de Clientes</a>
                            <div class="dropdown-divider"></div>

                            <a wire:navigate class="dropdown-item" href="#">Pedidos</a>
                            <a wire:navigate class="dropdown-item" href="#">Pedidos por Bairro</a>

                            <div class="dropdown-divider"></div>

                            <a wire:navigate class="dropdown-item" href="#">Entregas</a>
                            <a wire:navigate class="dropdown-item" href="#">Entregas por
                                Entregador</a>
                            <a wire:navigate class="dropdown-item" href="#">Consumo das Motos</a>
                        </div>
                    </li>
                -->
                    <!-- else-->
                    <!--
                    <li class=" nav-item">
                        <a wire:navigate class="nav-link text-black" href="#">
                            Caixa
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a wire:navigate class="nav-link text-black" href="#">
                            Abastecimento de Moto
                        </a>
                    </li>
                -->
                    <!-- endif-->
                </ul>

            </div>
        </nav>


        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    @livewireScripts
</body>

</html>
