<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Location;
use App\Models\State;
use Exception;


class Exclui extends Controller
{
    public function excluiPais($id){
        $pais = Country::findOrfail($id);
        return view('exclui.pais', ['pais'=>$pais]);

    }
    public function deletePais($id){
        try{
            $pais = Country::findOrfail($id);
            

            $pais->delete();
            
            return view('retorno.excluido');

        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        }

    }

    public function excluiLocalizacao($id){
        $localizacao = Location::findOrfail($id);
        return view('exclui.localizacao', ['localizacao'=>$localizacao]);

    }
    public function deleteLocalizacao($id){
        try{
            $localizacao = Location::findOrfail($id);
            

            $localizacao->delete();
            
            return view('retorno.excluido');

        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        }

    }

    public function excluiEstado($id){
        $estado = State::findOrfail($id);
        return view('exclui.estado', ['estado'=>$estado]);

    }

    public function deleteEstado($id){
        try{
            $estado = State::findOrfail($id);
            

            $estado->delete();
            
            return view('retorno.excluido');

        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        }

    }

    public function excluiCidade($id){
        $cidade = City::findOrfail($id);
        return view('exclui.cidade', ['cidade'=>$cidade]);

    }
    
    public function deleteCidade($id){
        try{
            $cidade = City::findOrfail($id);
            

            $cidade->delete();
            
            return view('retorno.excluido');

        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        }

    }
}