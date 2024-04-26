<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Http\Request;

class ClienteController extends Controller {
    public static function cadastrar($req, $res) {
        if ($req->input('_id') == '') { // cadastrar
            $cliente = ClienteModel::where('cpf', $req->input('cpf'))->first();
            if ($cliente != null) {
                // cpf existe
                return redirect()->route('clientes.cadastrar', ['s' => 4, 'nome' => $req->input('nome'), 'cpf' => $req->input('cpf')]);
            } else {
                $novoCliente = new ClienteModel([
                    'nome' => $req->input('nome'),
                    'cpf' => $req->input('cpf'),
                    'tipo' => $req->input('tipo'),
                    'mes' => $req->input('mes')
                ]);
                $novoCliente->save();
                return redirect()->route('clientes.index', ['s' => 1]);
            }
        } else { // atualizar
            $cliente = ClienteModel::where('cpf', $req->input('cpf'))->first();
            $clienteAtual = ClienteModel::find($req->input('_id'));
            if ($cliente == null || $clienteAtual->cpf == $req->input('cpf')) {
                $id = $req->input('_id');
                $clienteUpdate = [
                    'nome' => $req->input('nome'),
                    'cpf' => $req->input('cpf'),
                    'tipo' => $req->input('tipo'),
                    'mes' => $req->input('mes')
                ];
                ClienteModel::where('_id', $id)->update($clienteUpdate);
                return redirect()->route('clientes.index', ['s' => 3]);
            } else {
                // cpf existe
                return redirect()->route('clientes.cadastrar', ['s' => 4, 'nome' => $req->input('nome'), 'cpf' => $req->input('cpf')]);
            }
        }
    }

    public static function relatorio($req, $res) {
        $status = $req->query('s');
        $VClientes = ClienteModel::all();
        return view('cliente.relatorio', compact('VClientes', 'status'));
    }

    public static function detalhar($req, $res) {
        $id = $req->route('id');
        $c = ClienteModel::find($id);
        return view('cliente.detalhar', compact('c'));
    }

    public static function imprimir($req, $res) {
        $id = $req->route('id');
        $c = ClienteModel::find($id);
        return view('cliente.boleto', compact('c'));
    }

    public static function cadastrarRender($req, $res) {
        $status = $req->query('s');
        $clienteUpdate = [
            'nome' => $req->input('nome'),
            'cpf' => $req->input('cpf'),
            'tipo' => $req->input('tipo'),
            'mes' => $req->input('mes')
        ];
        return view('cliente.cadastrar', compact('clienteUpdate', 'status'));
    }

    public static function deletar($req, $res) {
        $id = $req->route('id');
        ClienteModel::destroy($id);
        return redirect()->route('clientes.index', ['s' => 2]);
    }

    public static function atualizar($req, $res) {
        $status = $req->query('s');
        $id = $req->route('id');
        $clienteUpdate = ClienteModel::find($id);
        return view('cliente.cadastrar', compact('clienteUpdate', 'status'));
    }
}
