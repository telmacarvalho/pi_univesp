<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContatoController;


// Rota home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rotas de autenticação
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rota para contatos
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::post('/registrar', [ContatoController::class, 'register'])->name('registrar');

// // Rota para upload de arquivos
// Route::post('/upload', function(Request $request) {
//     $request->file('file')->store('imagens'); // Isso armazenará o arquivo na pasta "storage/app/imagens"
//     return back()->with('success', 'Arquivo enviado com sucesso!');
// });

// Rota para exibir o formulário de login
Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/terms', function () {
    return view('terms');
})->name('terms');

//Rota para formulário enviado com sucesso

Route::get('/cadastro-enviado', function () {
    return view('cadastro-enviado');
});

// Outras rotas existentes...
