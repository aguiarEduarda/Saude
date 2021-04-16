<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;

class CadastroController extends Controller
{
    //--------------&---------------//
    public function welcome(){
        return route ('welcome');
    }

    public function create(){
        return redirect (route ('welcome'));
    }

    public function cadastro()
    {
        return view ('usuario.cadastro');
    }

    public function login()
    {
        return view ('usuario.login');
    }

    public function save(Request $request){
        $usuario = new Usuario;
        $usuario->nome = $request->nome;
        $usuario->cnpj = $request->cnpj;
        $usuario->facebook = $request->facebook;
        $usuario->instagram = $request->instagram;
        $usuario->email = $request->email;
        $usuario->twitter = $request->twitter;
        $usuario->senha =$request->senha;
        $usuario->save();

        $endereco = new Endereco();
        $endereco->bairro = $request->bairro;
        $endereco->rua = $request->rua;
        $endereco->numero =$request->numero;
        $endereco->complemento =$request->complemento;
        $endereco->id = $usuario->id;
        $endereco->save();  
        return redirect (route ('carregarLogin'));
    }

    public  function salvarlogin (Request $request)
    {
        $cnpj = $request->cnpj;
        $senha = $request->senha; 
        
        return view ("telaservidor");
    }

    public function recuperacao()
    {
        return view ('usuario.recuperacao');
    }
}
