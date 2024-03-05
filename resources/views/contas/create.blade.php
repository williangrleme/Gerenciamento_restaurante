@extends('layouts.app')
@section('title', 'Cadastrar')

@section('content')
<div class="container">
    <h1>Abrir conta</h1>
    <hr>
    <form action="{{ route('contas.store') }}" method="post">
        @csrf
        <div class="form-group">
        <label for="cliente_id">Cliente:</label>
        <select name="cliente_id" class="form-control selectpicker">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @endforeach
        </select>   
        </div>

        <div class="form-group">
            <label for="quantPessoas">Quantidade de pessoas:</label>
            <input type="number" class="form-control" name="quantPessoas" placeholder="N.º de pessoas na mesa">
        </div>

        <div class="form-group">
            <label for="valorTotal">Valor Total:</label>
            <input type="number" class="form-control" id="valorTotal" name="valorTotal" placeholder="Digite o valor total" oninput="updateValorRestante()">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection
