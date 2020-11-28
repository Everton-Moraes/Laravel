<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;

class LocationsAndCountries extends Controller
{
    public function buscaLocation(){
        $buscaPais='none';
        $pais=Country::where('nome',$buscaPais)->get()->first();
    }

}
