<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaudeController extends Controller
{
    public function telaServidor()
    {
        return view ('telaservidor');
    }

    public function telaCliente()
    {
        return view ('telacliente');
    }

    public function sobre()
    {
        return view ('usuario.sobre');
    }
}
