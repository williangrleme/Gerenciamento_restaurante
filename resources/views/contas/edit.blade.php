@extends('layouts.app')
@section('title', 'Editar')

@section('content')
<div class="container">
    <h1>Editar conta</h1>
    <hr>
    <form action="{{ route('contas.update', ['id' => $contas->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cliente_id">Cliente:</label>
            <select name="cliente_id" class="form-control selectpicker">
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}" @if ($contas->cliente_id == $cliente->id) selected @endif>{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantPessoas">Quantidade de pessoas:</label>
            <input type="number" class="form-control" name="quantPessoas" placeholder="N.º de pessoas na mesa" value ="{{$contas->quantPessoas}}">
        </div>

        <div class="form-group">
            <label for="valorTotal">Valor Total:</label>
            <input type="number" class="form-control" id="valorTotal" name="valorTotal" placeholder="Digite o valor total"value= "{{$contas->valorTotal}}">
        </div>
        
        <div class="form-group">
            <label for="pagar">Valor a pagar:</label>
            <input type="number" class="form-control" id="pagar" name="pagar" placeholder="Insira o valor a ser pago">
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
