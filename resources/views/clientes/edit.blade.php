@extends('layouts.app')
@section('title', 'Editar')

@section('content')
<div class="container">
    <h1>Editar cliente</h1>
    <hr>
    <form action="{{ route('clientes.update', ['id' => $clientes->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite um nome" value="{{$clientes->nome}}">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" name="telefone" placeholder="Digite um telefone" value="{{$clientes->telefone}}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" placeholder="Digite um email" value="{{$clientes->email}}">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
        </div>
    </form>
</div>
@endsection
