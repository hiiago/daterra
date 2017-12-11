<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooperativa extends Model
{
    public function agricultor(){
        return $this->hasMany(AgricultorCooperativa::class, 'cooperativa_id');
    }

    public function producao(){
    	 return $this->hasMany(ProducaoCooperativa::class, 'cooperativa_id');
    }
}
