<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;

// Rotas para Usuários
Route::get('/usuarios', [UsuarioController::class, 'relatorio'])->middleware(['auth', 'usuarioSuperAdmin']);
Route::get('/usuario/{id}', [UsuarioController::class, 'detalhar'])->middleware(['auth', 'usuarioSuperAdmin']);
Route::post('/usuarios', [UsuarioController::class, 'cadastrar']);
Route::get('/usuarios/login', [UsuarioController::class, 'loginRender']);
Route::post('/usuarios/login', [UsuarioController::class, 'checkLogin']);
Route::get('/usuarios/cadastrar', [UsuarioController::class, 'cadastrarRender'])->middleware(['auth', 'usuarioSuperAdmin']);
Route::get('/usuario/cadastrar/{id}', [UsuarioController::class, 'atualizar'])->middleware(['auth', 'usuarioSuperAdmin']);
Route::get('/usuario/deletar/{id}', [UsuarioController::class, 'deletar'])->middleware(['auth', 'usuarioSuperAdmin']);

// Rotas para Clientes
Route::get('/clientes', [ClienteController::class, 'relatorio'])->middleware(['auth', 'usuarioSuperAdmin']);
Route::get('/cliente/{id}', [ClienteController::class, 'detalhar'])->middleware('auth');
Route::post('/clientes', [ClienteController::class, 'cadastrar'])->middleware(['auth', 'usuarioAdmin']);
Route::get('/cliente/boleto/{id}', [ClienteController::class, 'imprimir'])->middleware('auth');
Route::get('/clientes/cadastrar', [ClienteController::class, 'cadastrarRender'])->middleware('auth');
Route::get('/cliente/cadastrar/{id}', [ClienteController::class, 'atualizar'])->middleware('auth');
Route::get('/cliente/deletar/{id}', [ClienteController::class, 'deletar'])->middleware('auth');
