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

Route::get ('/sobre', '\App\Http\Controllers\SaudeController@sobre')->name('sobre');

Route::get ('/cadastro', '\App\Http\Controllers\SaudeController@cadastro')->name('carregarCadastro');

Route::post ('/salvar-usuario', '\App\Http\Controllers\SaudeController@salvar')->name('salvarUsuario');

Route::get ('/login', '\App\Http\Controllers\SaudeController@login')->name('carregarLogin');

Route::post ('/salvar-login', '\App\Http\Controllers\SaudeController@salvarlogin')->name('salvarLogin');

Route::get ('/recuperacao', '\App\Http\Controllers\SaudeController@recuperacao')->name('recuperarSenha');
