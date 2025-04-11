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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

Route::get('/teste', 'TesteController@teste');

/*
** Rotas com parâmetros
 Nota: Exemplos de rotas com parâmetros e boas práticas
 1. Use o método `where` para restringir os tipos de parâmetros (ex.: numéricos ou alfabéticos).
 2. Nomeie os parâmetros de forma clara e descritiva para facilitar a compreensão.
 3. Sempre valide os parâmetros recebidos para evitar erros ou comportamentos inesperados.
 4. Utilize controllers para lógica mais complexa, mantendo as rotas simples e organizadas.

 Exemplo de rota com um parâmetro
 Route::get('/saudacao/{nome}', function (string $nome) {
    return "Olá, $nome! Seja bem-vindo ao nosso site.";
})->where('nome', '[A-Za-z]+'); // Restringe o parâmetro 'nome' para conter apenas letras

*/

Route::get(
    '/contato/{nome}/{categoria}/{assunto}/{mensagem}',
    function (string $nome, string $categoria, string $assunto, string $mensagem) {
        echo "Estamos aqui: $nome -  $categoria -  $assunto -  $mensagem";
    }
);
