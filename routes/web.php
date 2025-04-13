<?php

use Faker\Guesser\Name;
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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function () {
    return 'Login';
})->Name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', function () {
        return 'fornecedores';
    })->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'produtos';
    })->name('app.produtos');
});

Route::get('/rota1', function () {
    echo 'rota1';
})->name('site.rota1');

Route::fallback(function () {
    return response()
        ->view('fallback', [], 404) // Retorna HTTP 404
        ->header('Content-Type', 'text/html');
})->name('site.fallback');

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');


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

/*
Route::get('/rota2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');


Route::redirect('/rota2', '/rota1'); outra forma de fazer

*/
