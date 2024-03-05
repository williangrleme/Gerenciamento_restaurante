<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\cliente;

class clientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view("clientes.index", ['clientes'=>$clientes]);
    }


    public function create()
    {
        return view("clientes.create");
    }

  
    public function store(Request $request)
    {
        $dadoValidado = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes|max:255',
            'telefone' => 'required|string|max:20',
        ]);
    
        Cliente::create($dadoValidado);
    
        return redirect()->route('clientes.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $clientes = cliente::where('id', $id)->first();
        if(!empty($clientes)){
            return view("clientes.edit", ['clientes'=>$clientes]);
        }
        else{
            return redirect()->route('clientes.index');
        }

    }
    public function update(Request $request, string $id)
    {
        //dd($request);
        $data = [
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone
        ];
        cliente::where('id',$id)->update($data);
        return redirect()->route('clientes.index');
    }

    public function destroy(string $id)
    {
        cliente::where('id',$id)->delete();
        return redirect()->route('clientes.index');
    }
}
