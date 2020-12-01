<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;
use App\Models\State;
use Exception;

class Busca extends Controller
{
    public function buscaPaises(){
        try{
            $paises = Country::all();
            return view("cadastro.cadastro_location")->with('paises', $paises);
        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        } 
    }

    public function buscaPaisesStates(){
        try{
            $paises = Country::all();
            return view("cadastro.cadastro_state")->with('paises', $paises);
        }catch(Exception $e) {
        return view('retorno.erro', ['erro'=>$e]);
        } 
    }

    public function buscaEstados(){
        try{
            $estados = State::all();
            return view("cadastro.cadastro_city")->with('estados', $estados);
        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        } 
    }

    public function buscaPorPais(Request $request){
        try{
            if(Country::where('nome', $request->get('nome'))->count()==0){
                return view('retorno.busca_naoencontrado');
            }else{
                $pais=Country::where('nome', $request->get('nome'))->get()->first();
                $localizacao=$pais->location;
                $estados=$pais->states;
                return view('exibe.pais',['localizacao'=> $localizacao, 'pais'=> $pais, 'estados'=>$estados]);
            }
        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        } 
    }

    public function buscaPorLocalizacao(Request $request){
        try{
            if(Location::where('latitude', $request->get('latitude'))->where('longitude',$request->get('longitude'))->count()==0){
                return view('retorno.busca_naoencontrado');
            }else{
                $localizacao=Location::where('latitude', $request->get('latitude'))->where('longitude',$request->get('longitude'))->get()->first();
                $pais=$localizacao->country;
                $estados=$pais->states;
                return view('exibe.pais',['localizacao'=> $localizacao, 'pais'=> $pais, 'estados'=>$estados]);
            }
        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        } 
    }

    public function buscaPorEstado(Request $request){
        try{
            if(State::where('nome', $request->get('nome'))->count()==0){
                return view('retorno.busca_naoencontrado');
            }else{
                $estado = State::where('nome', $request->get('nome'))->get()->first();
                $cidades = $estado->cities;
                $pais = $estado->country;
                return view('exibe.estado',['pais'=> $pais, 'estado'=>$estado, 'cidades'=>$cidades]);
            }
        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        } 
    }

    public function buscaPorCidade(Request $request){
        try{
            if(City::where('nome', $request->get('nome'))->count()==0){
                return view('retorno.busca_naoencontrado');
            }else{
                $cidade = City::where('nome', $request->get('nome'))->get()->first();
                $estado = $cidade->state;
                $pais = $estado->country;
                return view('exibe.cidade',['pais'=> $pais, 'estado'=>$estado, 'cidade'=>$cidade]);
            }
        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        } 
    }
}
