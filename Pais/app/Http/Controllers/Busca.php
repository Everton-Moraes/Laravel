<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class Busca extends Controller
{
    public function buscaPaises(){
        $paises = Country::all();
        return view("cadastro.cadastro_location")->with('paises', $paises);
        
    }

    public function buscaPaisesStates(){
        $paises = Country::all();
        return view("cadastro.cadastro_state")->with('paises', $paises);
        
    }
    public function buscaEstados(){
        $estados = State::all();
        return view("cadastro.cadastro_city")->with('estados', $estados);
        
    }
    public function buscaPorPais(Request $request){
        if(Country::where('nome', $request->get('nome'))->count()==0){
            return view("retorno.busca_naoencontrado");
        }else{
            $pais=Country::findOrfail($request->get('nome'));
            $localizacao=$pais->location;
            echo "Latitude : {$localizacao->latitude}<br>";
            echo "Longitude : {$localizacao->longitude}<br>";
        
        }
    }
}
