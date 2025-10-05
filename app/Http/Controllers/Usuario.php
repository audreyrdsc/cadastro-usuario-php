<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function cadastrar() {
        echo "Rota para função cadastrar funcionando corretamente";
    }

    public function salvar(Request $request) {
       dd($request->all());
    }
}
