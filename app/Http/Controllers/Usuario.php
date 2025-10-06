<?php

namespace App\Http\Controllers;

use App\Models\Usuario as UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usuario extends Controller
{
    public function cadastrar() {
        //dd(Hash::make(123), md5('123'), sha1('123'));
        //echo "Rota para função cadastrar funcionando corretamente";
        return view('usuario.cadastro');
    }

    public function salvar(Request $request) {
        $request->validate([
            'nome' => 'required|min:3|max:100',
            'email' => 'required|email',
            'senha' => 'required|min:3|max:15'
        ]);
       //dd($request->all());
       UsuarioModel::cadastrar($request);
       return view('usuario.sucesso');

    }
}
