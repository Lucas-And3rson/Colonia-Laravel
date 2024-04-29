<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;


Route::get('/clientes', [ClientesController::class, 'relatorio']);
// ->middleware(['auth', 'usuarioSuperAdmin'])
Route::get('/cliente/{id}', [ClientesController::class, 'detalhar']);
// ->middleware('auth')
Route::post('/clientes', [ClientesController::class, 'cadastrar']);
// ->middleware(['auth', 'usuarioAdmin'])
Route::get('/cliente/boleto/{id}', [ClientesController::class, 'imprimir']);
// ->middleware('auth')
Route::get('/clientes/cadastrar', [ClientesController::class, 'cadastrarRender']);
// ->middleware('auth')
Route::get('/cliente/cadastrar/{id}', [ClientesController::class, 'atualizar']);
// ->middleware('auth')
Route::get('/cliente/deletar/{id}', [ClientesController::class, 'deletar']);
// ->middleware('auth')

// Route::get('/usuarios', [UsuarioController::class, 'relatorio'])->middleware(['auth', 'usuarioSuperAdmin']);
// Route::get('/usuario/{id}', [UsuarioController::class, 'detalhar'])->middleware(['auth', 'usuarioSuperAdmin']);
// Route::post('/usuarios', [UsuarioController::class, 'cadastrar']);
// Route::get('/usuarios/login', [UsuarioController::class, 'loginRender']);
// Route::post('/usuarios/login', [UsuarioController::class, 'checkLogin']);
// Route::get('/usuarios/cadastrar', [UsuarioController::class, 'cadastrarRender'])->middleware(['auth', 'usuarioSuperAdmin']);
// Route::get('/usuario/cadastrar/{id}', [UsuarioController::class, 'atualizar'])->middleware(['auth', 'usuarioSuperAdmin']);
// Route::get('/usuario/deletar/{id}', [UsuarioController::class, 'deletar'])->middleware(['auth', 'usuarioSuperAdmin']);

Route::get('/', function () {
    return view('index');
});

Route::get('/eventos', function () {
    return view('eventos');
});

// Rota para a página "sobre"
Route::get('/sobre', function () {
    return view('sobre');
});

// Rota para o hub admin
Route::get('/hub', function () {
    if (session('usuario') != null) {
        return view('hub.admin');
    } else {
        return redirect('/usuarios/login');
    }
});

// Rota para logout
Route::get('/logout', function () {
    session(['usuario' => null]);
    return redirect('/usuarios/login');
});

Route::fallback(function () {
    return view('erro.404');
});
