<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Country;



class Cadastro extends Controller {
    public function cadastroPais(Request $request){
        Country::create([
            'nome'=> $request->nome,
        ]);
        return view('retorno.tela');

    }
} 