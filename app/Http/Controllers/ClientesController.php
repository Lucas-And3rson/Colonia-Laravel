<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public static function cadastrar(Request $request) {
        if ($request->_id == '') { // cadastrar
            $cliente = Cliente::where('cpf', $request->cpf)->first();
            if ($cliente != null) {
                // cpf existe
                return redirect()->route('clientes.cadastrar', ['s' => 4, 'nome' => $request->nome, 'cpf' => $request->cpf]);
            } else {
                $novoCliente = new Cliente([
                    'nome' => $request->nome,
                    'cpf' => $request->cpf,
                    'tipo' => $request->tipo,
                    'mes' => $request->mes
                ]);
                $novoCliente->save();
                // insert into `clientes` (`nome`, `cpf`, `tipo`, `mes`, `updated_at`, `created_at`) values (Lucas, 122.222.222-22, ?, ?, 2024-04-29 20:12:04, 2024-04-29 20:12:04)
                return redirect()->route('clientes.index', ['s' => 1]);
            }
        } else { // atualizar
            $cliente = Cliente::where('cpf', $request->input('cpf'))->first();
            $clienteAtual = Cliente::find($request->input('_id'));
            if ($cliente == null || $clienteAtual->cpf == $request->input('cpf')) {
                $id = $request->input('_id');
                $clienteUpdate = [
                    'nome' => $request->nome,
                    'cpf' => $request->cpf,
                    'tipo' => $request->tipo,
                    'mes' => $request->mes
                ];
                Cliente::where('_id', $id)->update($clienteUpdate);
                return redirect()->route('clientes.index', ['s' => 3]);
            } else {
                // cpf existe
                return redirect()->route('clientes.cadastrar', ['s' => 4, 'nome' => $request->nome, 'cpf' => $request->cpf]);
            }
        }
    }

    public function relatorio(Request $request)
    {
        $stats = $request->query('s');
        $VClientes = Cliente::all();
        return view('clientes.relatorio', compact('VClientes', 'stats'));
    }
    public static function detalhar(Request $request) {
        $id = $request->route('id');
        $c = Cliente::find($id);
        return view('clientes.detalhar', compact('c'));
    }

    public static function imprimir(Request $request) {
        $id = $request->route('id');
        $c = Cliente::find($id);
        return view('clientes.boleto', compact('c'));
    }

    public static function cadastrarRender(Request $request) {
        $stats = $request->query('s');
        $clienteUpdate = [
            'nome' => $request->nome,
            'cpf' => $request->inputcpf,
            'tipo' => $request->tipo,
            'mes' => $request->mes
        ];
        return view('clientes.cadastrar', compact('clienteUpdate', 'stats'));
    }

    public static function deletar(Request $request) {
        $id = $request->route('id');
        Cliente::destroy($id);
        return redirect()->route('clientes.index', ['s' => 2]);
    }

    public static function atualizar(Request $request) {
        $stats = $request->query('s');
        $id = $request->route('id');
        $clienteUpdate = Cliente::find($id);
        return view('clientes.cadastrar', compact('clienteUpdate', 'stats'));
    }
}
