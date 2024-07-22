@extends('layouts.admin')

@section('content')
@include('mensagens.mensagem')
<div class="container">
    <h1 class="text-center" style="margin-top: 30px;">Cadastrar</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('usuarios.store') }}" method="post">
                @csrf                
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control" name="nome" type="text" placeholder="Nome do usuário">
                    <label for="matricula">Matrícula/MASP/CPF</label>
                    <input class="form-control" name="matricula" type="text" placeholder="Matrícula/MASP/CPF">
                    <label for="email">Email</label>
                    <input class="form-control" name="email" type="text" placeholder="exemplo@gmail.com">
                    <label for="nascimento">Data de Nascimento</label>
                    <input class="form-control" name="nascimento" type="date">
                    <label for="curso">Curso</label>
                    <select class="form-select" aria-label="curso" name="curso">
                        <option selected disabled>Selecione</option>
                        <option value="0">Agronomia</option>
                        <option value="1">Medicina</option>
                        <option value="2">Direito</option>
                        <option value="3">Sistemas de Informação</option>
                    </select>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-principal">Salvar usuário</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
    .btn-principal{
        margin-top: 20px;
        margin-bottom: 40px;
    }
</style>
@endsection