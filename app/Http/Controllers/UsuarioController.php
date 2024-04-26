<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UsuarioModel;

class UsuarioController extends Controller{

    public static function cadastrar($req, $res) {
        if ($req->input('_id') == '') { // cadastrar
            $user = UsuarioModel::where('email', $req->input('email'))->first();
            if ($user != null) {
                // email existe
                return redirect()->route('usuarios.cadastrar', ['s' => 4, 'nome' => $req->input('nome'), 'email' => $req->input('email')]);
            } else {
                $hash = Hash::make($req->input('senha'));
                $novoUsuario = new UsuarioModel([
                    'nome' => $req->input('nome'),
                    'email' => $req->input('email'),
                    'nivel' => $req->input('nivel'),
                    'senha' => $hash
                ]);
                $novoUsuario->save();
                return redirect()->route('usuarios.index', ['s' => 1]);
            }
        } else { // atualizar
            $user = UsuarioModel::where('email', $req->input('email'))->first();
            $userAtual = UsuarioModel::find($req->input('_id'));
            $hash = Hash::make($req->input('senha'));
            if ($user == null || $userAtual->email == $req->input('email')) {
                $id = $req->input('_id');
                $usuarioUpdate = [
                    'nome' => $req->input('nome'),
                    'email' => $req->input('email'),
                    'nivel' => $req->input('nivel'),
                    'senha' => $hash
                ];
                UsuarioModel::where('_id', $id)->update($usuarioUpdate);
                return redirect()->route('usuarios.index', ['s' => 3]);
            } else {
                // email existe
                return redirect()->route('usuarios.cadastrar', ['s' => 4, 'nome' => $req->input('nome'), 'email' => $req->input('email')]);
            }
        }
    }

    public static function relatorio($req, $res) {
        $status = $req->query('s');
        $VUsuarios = UsuarioModel::all();
        return view('usuario.relatorio', compact('VUsuarios', 'status'));
    }

    public static function detalhar($req, $res) {
        $id = $req->route('id');
        $u = UsuarioModel::find($id);
        return view('usuario.detalhar', compact('u'));
    }

    public static function cadastrarRender($req, $res) {
        $status = $req->query('s');
        $usuarioUpdate = [
            'nome' => $req->query('nome'),
            'email' => $req->query('email'),
            'nivel' => $req->input('nivel')
        ];
        return view('usuario.cadastrar', compact('usuarioUpdate', 'status'));
    }

    public static function checkLogin($req, $res) {
        $user = UsuarioModel::where('email', $req->input('email'))->first();
        if ($user != null) {
            if (Hash::check($req->input('senha'), $user->senha)) { // email e senha válidos
                $req->session()->put('usuario', $user->email);
                return redirect()->route('hub');
            } else { // senha inválida
                return redirect()->route('usuarios.login', ['s' => 6, 'email' => $req->input('email')]);
            }
        } else { // email inválido
            return redirect()->route('usuarios.login', ['s' => 5, 'email' => $req->input('email')]);
        }
    }

    public static function loginRender($req, $res) {
        $status = $req->query('s');
        $usuarioLogado = [
            'email' => $req->query('email')
        ];
        return view('usuario.login', compact('usuarioLogado', 'status'));
    }

    public static function deletar($req, $res) {
        $id = $req->route('id');
        UsuarioModel::destroy($id);
        return redirect()->route('usuarios.index', ['s' => 2]);
    }

    public static function atualizar($req, $res) {
        $status = $req->query('s');
        $id = $req->route('id');
        $usuarioUpdate = UsuarioModel::find($id);
        return view('usuario.cadastrar', compact('usuarioUpdate', 'status'));
    }
}
