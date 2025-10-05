<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario;

//Route::get('/', function () {
//    return view('welcome');
//});

// Rota para o formulário de cadastro
Route::get('/', [Usuario::class, 'cadastrar']);

// Rota para salvar os dados
Route::post('/salvar', [Usuario::class, 'salvar']);
