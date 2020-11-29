<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Country;
use Exception;

class Cadastro extends Controller {
    public function cadastroPais(Request $request){
        try{
            Country::firstOrCreate([
                'nome'=> $request->nome,
            ]);
                return view('retorno.tela');
            
            
        }catch(Exception $e) {
            return view('retorno.erro');
        }

    }

    public function buscaPaises(){
        $paises = Country::all();
        return view("cadastro.cadastro_location")->with('paises', $paises);
        
    }
} 