<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\Location;
use App\Models\State;

class Lista extends Controller
{
    public function listaPaises($id){
        switch($id){
            case 1:
                $itens = Country::all();
                return view('exibe.lista', ['itens'=>$itens, 'id'=>$id]);
                break;
            case 2:
                $itens = Location::all();
                return view('exibe.lista', ['itens'=>$itens, 'id'=>$id]);
                break;
            case 3:
                $itens = State::all();
                return view('exibe.lista', ['itens'=>$itens, 'id'=>$id]);
                break;
            case 4:
                $itens = City::all();
                return view('exibe.lista', ['itens'=>$itens, 'id'=>$id]);
                break;
            default:
                return view('retorno.erro', ['erro'=>'Opção não encontrada']);
        }
        
    }

}
