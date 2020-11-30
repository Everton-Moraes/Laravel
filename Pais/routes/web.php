<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastro;
use App\Http\Controllers\Busca;

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
    return view('index');
})->name('index');

Route::get('/cadastropais', function(){
    return view('cadastro.cadastro_country');
})->name('cadastro.pais');
Route::post('/cadastropais', [Cadastro::class,'cadastroPais'])->name('pais.cadastrado');

Route::get('/cadastrolocalizacao', [Busca::class,'buscaPaises'])->name('cadastro.localizacao');
Route::post('/cadastrolocalizacao', [Cadastro::class,'cadastroLocalizacao'])->name('localizacao.cadastrado');

Route::get('/cadastroestado',  [Busca::class,'buscaPaisesStates'])->name('cadastro.estado');
Route::post('/cadastroestado', [Cadastro::class,'cadastroEstado'])->name('estado.cadastrado');

Route::get('/cadastrocidade', [Busca::class,'buscaEstados'])->name('cadastro.cidade');
Route::post('/cadastrocidade', [Cadastro::class,'cadastroCidade'])->name('cidade.cadastrado');

Route::get('/buscapais', function(){
    return view('busca.busca_country');
})->name('busca.pais');
Route::post('/buscapais', [Busca::class, 'buscaPorPais'])->name('pais.buscado');

Route::get('/buscaestado', function(){
    return view('busca.busca_state');
})->name('busca.estado');

Route::get('/buscacidade', function(){
    return view('busca.busca_city');
})->name('busca.cidade');

Route::get('/buscalocalizacao', function(){
    return view('busca.busca_location');
})->name('busca.localizacao');

