<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    // Rotas com mid
    Route::get('/logout', 'HomeController@logout')->name('logout');

    Route::get('/produtos', [App\Http\Controllers\ProdutoController::class, 'index'])->name('produtos.index');
    Route::post('/produtos/criar', [App\Http\Controllers\ProdutoController::class, 'criar'])->name('produtos.criar');
    Route::post('/produtos/excluir/{id}', [App\Http\Controllers\ProdutoController::class, 'excluir'])->name('produtos.excluir');
    Route::get('/editar-promocao', [App\Http\Controllers\ProdutoController::class,'editarPromocao']);
    Route::post('/editar-promocao', [App\Http\Controllers\ProdutoController::class,'updatePromocao'])->name('updatePromocao');
    });

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home-2');
});
Route::get('/pesquisa-de-satisfacao', function () {
    return view('pesquisa-de-satisfacao');
});
Route::get('/produtos-e-servicos', function () {
    return view('produtos-e-servicos');
});


Route::get('/produtos-e-servicos/{urlCategoria}', [App\Http\Controllers\HomeController::class, 'exibirPorCategoria']);


Route::get('/produtos-em-promocao', function () {
    return view('produtos-em-promocao');
});
Route::get('/quem-somos', function () {
    return view('quem-somos');
});
Route::get('/tabela-de-precos', function () {
    return view('tabela-de-precos');
});
Route::get('/fale-conosco', function () {
    return view('fale-conosco');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/download/pdf/{filename}',[App\Http\Controllers\ProdutoController::class, 'serveFile']);
Route::get('public-json', [App\Http\Controllers\ProdutoController::class, 'getJsonFile']);


