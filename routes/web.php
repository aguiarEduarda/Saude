<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ROTA PADRÃO DE CADASTRO DE USUÁRIO
Route::prefix('usuario')->group(function () 
{
    Route::get('create', 'App\Http\Controllers\CadastroController@create')->name('createUsuario');
    Route::post('save', 'App\Http\Controllers\CadastroController@save')->name('saveUsuario');
});

//ROTAS DE CADASTRO DE USUÁRIO
Route::get ('/sobre', '\App\Http\Controllers\CadastroController@sobre')->name('sobre');
Route::get ('/cadastro', '\App\Http\Controllers\CadastroController@cadastro')->name('carregarCadastro');
Route::post ('/salvar-usuario', '\App\Http\Controllers\CadastroController@salvar')->name('salvarUsuario');
Route::get ('/login', '\App\Http\Controllers\CadastroController@login')->name('carregarLogin');
Route::post ('/salvar-login', '\App\Http\Controllers\CadastroController@salvarlogin')->name('salvarLogin');
Route::get ('/recuperacao', '\App\Http\Controllers\CadastroController@recuperacao')->name('recuperarSenha');

Route::get ('/sobre', '\App\Http\Controllers\SaudeController@sobre')->name('sobre');


//ROTA TELA DE CLIENTE E SERVIDOR
Route::get ('/telacliente', '\App\Http\Controllers\SaudeController@telaCliente')->name('telaCliente');
Route::get ('/telaservidor', '\App\Http\Controllers\SaudeController@telaServidor')->name('telaServidor');

//ROTAS DE CADASTRO DE COLSULTA
Route::get ('/nome', '\App\Http\Controllers\SaudeController@funcao')->name('nome');
Route::post ('/nome', '\App\Http\Controllers\SaudeController@funcao')->name('nome');

//ROTAS DE CADASTRO DE HORÁRIOS E DIAS
Route::get ('/nome', '\App\Http\Controllers\DataController@funcao')->name('nome');
Route::post ('/nome', '\App\Http\Controllers\DataController@funcao')->name('nome');
