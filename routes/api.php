<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Rota protegida por autenticação de API (Sanctum)
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Rota para API
Route::prefix('v1')->group(function () {
    Route::get('/lista', function() {
        return ['a', 'b', 'c'];
    });
});
