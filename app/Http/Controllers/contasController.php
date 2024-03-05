<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Conta;
use App\Models\Cliente;

class ContasController extends Controller
{
    public function index()
    {
        $contas = Conta::all();
        foreach ($contas as $conta) {
            $conta->divisao = $this->calcValor($conta->valorRestante, $conta->quantPessoas);
        }
        return view("contas.index", compact('contas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view("contas.create", ['clientes'=>$clientes]);
    }

    public function store(Request $request)
    {
        $dadoValidado = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'valorTotal' => 'required|numeric|min:0',
            'quantPessoas' => 'required|integer|min:1',
        ]);

        $conta = new Conta();
        $conta->cliente_id = $dadoValidado['cliente_id'];
        $conta->valorRestante = $dadoValidado['valorTotal'];
        $conta->fill($dadoValidado);
        $conta->save();
    return redirect()->route('contas.index');
    }
    
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $contas = Conta::find($id); 
        $clientes = Cliente::all();
        if (!empty($contas)) {
            return view("contas.edit", compact('contas', 'clientes'));
        } else {
            return redirect()->route('contas.index');
        }
    }

    public function update(Request $request, string $id)
    {
        $conta = Conta::findOrFail($id);
    
      
        $valorRestante = $conta->valorRestante ?? $conta->valorTotal;
        $valorPago = $request->pagar;
        $valorRestante -= $valorPago;
    
        $data = [
            'cliente_id' => $request->cliente_id,
            'valorTotal' => $request->valorTotal,
            'valorRestante' => $valorRestante, 
            'quantPessoas' => $request->quantPessoas,
        ];
    
        $conta->update($data);
        return redirect()->route('contas.index');
    }

    public function destroy(string $id)
    {
        Conta::where('id', $id)->delete();
        return redirect()->route('contas.index');
    }

    private function calcValor($valorRestante, $quantPessoas)
    {
        return round($valorRestante / $quantPessoas, 2);
    }
}
