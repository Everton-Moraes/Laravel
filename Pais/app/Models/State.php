<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable=['country_id', 'nome', 'iniciais'];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function cities(){
        return $this->hasMany(City::class);
    }

}
