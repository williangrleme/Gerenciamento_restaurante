@extends('layouts.app')
@section('title', 'Cadastrar')

@section('content')
<div class="container">
    <h1>Novo cliente</h1>
    <hr>
    <form action="{{ route('clientes.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite um nome">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" name="telefone" placeholder="Digite um telefone">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" placeholder="Digite um email">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection
