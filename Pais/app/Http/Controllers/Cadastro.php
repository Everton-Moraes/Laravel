<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;
use App\Models\State;
use Exception;

class Cadastro extends Controller {

    public function cadastroPais(Request $request){
        try{
            if(Country::where('nome', $request->get('nome'))->count() == 0){
                Country::firstOrCreate([
                    'nome'=> $request->nome,
                ]);
                return view('retorno.tela');
            }else{
                return view('retorno.cadastrado');
            }
            
        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        }

    }

    public function cadastroLocalizacao(Request $request){
        
        try{
            if(Location::where('country_id', $request->get('country_id'))->count() == 0){
                Location::create([
                    'country_id'=> $request->country_id,
                    'latitude'=> $request->latitude,
                    'longitude'=>$request->longitude,
                ]);
                return view('retorno.tela');
            }else{
                return view('retorno.cadastrado');
            }
            
        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        }    
    }

    public function cadastroEstado(Request $request){
        try{
            if(State::where('nome', $request->get('nome'))->count() == 0){
                State::create([
                    'country_id'=> $request->country_id,
                    'nome'=> $request->nome,
                    'iniciais'=>$request->iniciais,
                ]);
                return view('retorno.tela');
            }else{
                return view('retorno.cadastrado');
            }
            
        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        }    
    }

    public function cadastroCidade(Request $request){
        try{
            if(City::where('state_id', $request->get('state_id'))->where('nome',$request->get('nome'))->count() == 0){
                City::create([
                    'state_id'=> $request->state_id,
                    'nome'=> $request->nome,
                ]);
                return view('retorno.tela');
            }else{
                return view('retorno.cadastrado');
            }
            
        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        }    
    }

}