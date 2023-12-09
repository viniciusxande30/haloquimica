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

    Route::get('/laudos', [App\Http\Controllers\ProdutoController::class, 'laudos'])->name('produtos.laudos');
    Route::post('/laudos/criar', [App\Http\Controllers\ProdutoController::class, 'laudoscriar'])->name('produtos.laudoscriar');
    Route::post('/laudos/excluir/{id}', [App\Http\Controllers\ProdutoController::class, 'laudosexcluir'])->name('produtos.laudosexcluir');


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

Route::get('/diretorio-de-fispq', function () {
    return view('fispq');
});

Route::get('/diretorio-de-laudos', function () {
    return view('laudos');
});

Route::get('/diretorio-de-laudos/{urlCategoria}', [App\Http\Controllers\HomeController::class, 'laudosexibirPorCategoria']);



Route::get('/diretorio-de-fispq/{urlCategoria}', [App\Http\Controllers\HomeController::class, 'fispqexibirPorCategoria']);

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
Route::get('/download/pdf_laudos/{filename}',[App\Http\Controllers\ProdutoController::class, 'laudosserveFile']);

Route::get('public-json', [App\Http\Controllers\ProdutoController::class, 'getJsonFile']);
Route::get('public-json-laudos', [App\Http\Controllers\ProdutoController::class, 'laudosgetJsonFile']);



