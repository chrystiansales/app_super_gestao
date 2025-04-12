<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Type\Integer;

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function () {
    return 'Login';
})->Name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes',     function () {
        return 'Clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', function () {
        return 'fornecedores';
    })->name('app.fornecedores');
    Route::get('/produtos',     function () {
        return 'produtos';
    })->name('app.produtos');
});

Route::get('/rota1', function () {
    echo 'rota1';
})->name('site.rota1');

Route::get('/rota1', function () {
    echo 'rota1';
})->name('site.rota1');

/* Rotas com parâmetros */
/*
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

/* Rota padrão do Laravel
Route::get('/', function () {
    return view('welcome');
});
*/
// Route::get('/teste', 'TesteController@teste');
