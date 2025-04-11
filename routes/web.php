<?php

use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Type\Integer;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');
Route::get('/teste', 'TesteController@teste');

/* Rotas com parâmetros */
Route::get(
    '/contato/{nome}/{categoria_id}',
    function (
        string $nome = 'Desconhecido',
        int $categoria_id = 1
    ) {
        echo "Estamos aqui: $nome -  $categoria_id";
    }
)->where('categoria_id', '[0-9]+')
 ->where('nome', '[A-Za-z]+')
;


Route::get(
    '/teste/{nome}',
    function (string $nome) {
        echo "Olá, $nome! Seja bem-vindo ao nosso site.";
    }
);

/*
Route::get(
    '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
    function (
        string $nome = 'desconhecido',
        string $categoria = 'informação',
        string $assunto = 'contato',
        string $mensagem = 'mensagem nao foi informada'
    ) {
        echo "Estamos aqui: $nome -  $categoria -  $assunto -  $mensagem";
    }
);
*/
