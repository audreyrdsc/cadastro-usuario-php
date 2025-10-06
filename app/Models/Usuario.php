<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'usuarios';
    
    public static function listar(int $limite) {
        $sql = self::select([
            'id', 
            'nome', 
            'email', 
            'senha',
            'data_cadastro'
        ])
        ->limit($limite);

        dd($sql->toSql());
    }

    public static function cadastrar(Request $request) {
     
        $sql = DB::table('usuarios')->insert([
        'nome' => $request->input('nome'),
        'email' => $request->input('email'),
        'senha' => Hash::make($request->input('senha')),
        'data_cadastro' => DB::raw("datetime('now')")
    ]);
    
        // Apenas para depuração (opcional):
        dd($sql, $request->all());
    }

}
