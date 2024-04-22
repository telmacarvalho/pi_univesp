<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Rotas de autenticação
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rota para upload de arquivos
Route::post('/upload', function(Request $request) {
    $request->file('file')->store('imagens'); // Isso armazenará o arquivo na pasta "storage/app/imagens"
    return back()->with('success', 'Arquivo enviado com sucesso!');
});

// Rota para exibir o formulário de login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Rota para exibir o formulário de registro
Route::get('/register', function () {
    return view('register');
})->name('register');

// Outras rotas
Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

// Outras rotas existentes...
