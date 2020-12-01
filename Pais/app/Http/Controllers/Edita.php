<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Exception;
use Illuminate\Http\Request;

class Edita extends Controller
{
    public function editaPais($id){
        $pais = Country::findOrfail($id);
        $localizacao= $pais->location;
        return view('edita.pais', ['pais'=>$pais, 'localizacao'=>$localizacao]);

    }
    public function updatePais(Request $request,$id){
        try{
            $pais = Country::findOrfail($id);
            $localizacao = $pais->location;

            $pais->update([
                'nome'=>$request->nome,
            ]);
            $localizacao->update([
                'latitude'=>$request->latitude,
                'longitude'=>$request->longitude,
            ]);
            return view('retorno.alterado');

        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        }

    }

    public function editaEstado($id){
        $estado = State::findOrfail($id);
        return view('edita.estado', ['estado'=>$estado]);

    }

    public function updateEstado(Request $request,$id){
        try{
            $estado = State::findOrfail($id);
            

            $estado->update([
                'nome'=>$request->nome,
                'iniciais'=>$request->iniciais,
            ]);
            
            return view('retorno.alterado');

        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        }

    }

    public function editaCidade($id){
        $cidade = City::findOrfail($id);
        return view('edita.cidade', ['cidade'=>$cidade]);

    }
    
    public function updateCidade(Request $request,$id){
        try{
            $cidade = City::findOrfail($id);
            

            $cidade->update([
                'nome'=>$request->nome,
            ]);
            
            return view('retorno.alterado');

        }catch(Exception $e) {
            return view('retorno.erro', ['erro'=>$e]);
        }

    }
}
