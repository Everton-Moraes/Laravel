<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastro;

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
    return view('cadastro_country');
})->name('cadastro.pais');


Route::post('/cadastropais', [Cadastro::class,'cadastroPais'])->name('pais.cadastrado');

Route::get('/cadastrolocalizacao', function(){
    return view('cadastro_location');
})->name('cadastro.localizacao');

Route::get('/cadastroestado', function(){
    return view('cadastro_state');
})->name('cadastro.estado');

Route::get('/cadastrocidade', function(){
    return view('cadastro_city');
})->name('cadastro.cidade');

Route::get('/buscapais', function(){
    return view('busca_country');
})->name('busca.pais');

Route::get('/buscaestado', function(){
    return view('busca_state');
})->name('busca.estado');

Route::get('/buscacidade', function(){
    return view('busca_city');
})->name('busca.cidade');

Route::get('/buscalocalizacao', function(){
    return view('busca_location');
})->name('busca.localizacao');