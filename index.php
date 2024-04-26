<?php

// Arquivo routes/web.php

use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    return view('index');
});

// Rota para a página de eventos
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

// Rota padrão para erro 404
Route::fallback(function () {
    return view('erro.404');
});
