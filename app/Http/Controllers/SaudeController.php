<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaudeController extends Controller
{
    public function cadastro()
    {
        return view ('cadastro');
    }

    public  function salvar (Request $request)
    {
        $nome = $request->nome;
        $cnpj = $request->cnpj;
        $bairro = $request->bairro;
        $rua = $request->rua;
        $numero = $request->numero;
        $complemento = $request->complemento;
        $instagram = $request->instagram;
        $facebook = $request->facebook;
        $email = $request->email;
        $twitter = $request->twitter;
        $senha = $request->senha; 
        
        return view ('welcome');
    }

    public function login()
    {
        return view ('login');
    }

    public  function salvarlogin (Request $request)
    {
        $cnpj = $request->cnpj;
        $senha = $request->senha; 
        
        return view ('welcome');
    }

    public function recuperacao()
    {
        return view ('recuperacao');
    }
}
