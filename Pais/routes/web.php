<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastro;
use App\Http\Controllers\Busca;
use App\Http\Controllers\Edita;
use App\Http\Controllers\Lista;
use App\Http\Controllers\Exclui;

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
Route::post('/buscaestado', [Busca::class, 'buscaPorEstado'])->name('estado.buscado');


Route::get('/buscacidade', function(){
    return view('busca.busca_city');
})->name('busca.cidade');
Route::post('/buscacidade', [Busca::class, 'buscaPorCidade'])->name('cidade.buscado');

Route::get('/buscalocalizacao', function(){
    return view('busca.busca_location');
})->name('busca.localizacao');
Route::post('/buscalocalizacao', [Busca::class, 'buscaPorLocalizacao'])->name('localizacao.buscado');

Route::get('/listapaises/{string}', [Lista::class,'listaPaises'])->name('exibe.paises');

Route::get('/editapais/{id}', [Edita::class, 'editaPais'])->name('edita.pais');
Route::post('/editapais/{id}', [Edita::class, 'updatePais'])->name('pais.editado');

Route::get('/editaestado/{id}', [Edita::class, 'editaEstado'])->name('edita.estado');
Route::post('/editaestado/{id}', [Edita::class, 'updateEstado'])->name('estado.editado');

Route::get('/editacidade/{id}', [Edita::class, 'editaCidade'])->name('edita.cidade');
Route::post('/editacidade/{id}', [Edita::class, 'updateCidade'])->name('cidade.editado');

Route::get('/excluipais/{id}', [Exclui::class, 'excluiPais'])->name('exclui.pais');
Route::post('/excluipais/{id}', [Exclui::class, 'deletePais'])->name('pais.excluido');

Route::get('/excluilocalizacao/{id}', [Exclui::class, 'excluiLocalizacao'])->name('exclui.localizacao');
Route::post('/excluilocalizacao/{id}', [Exclui::class, 'deleteLocalizacao'])->name('localizacao.excluido');

Route::get('/excluiestado/{id}', [Exclui::class, 'excluiEstado'])->name('exclui.estado');
Route::post('/excluiestado/{id}', [Exclui::class, 'deleteEstado'])->name('estado.excluido');

Route::get('/excluicidade/{id}', [Exclui::class, 'excluiCidade'])->name('exclui.cidade');
Route::post('/excluicidade/{id}', [Exclui::class, 'deleteCidade'])->name('cidade.excluido');