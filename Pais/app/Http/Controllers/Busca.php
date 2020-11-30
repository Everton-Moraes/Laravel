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
}
