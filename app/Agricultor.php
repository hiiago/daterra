<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agricultor extends Model
{
    public function producao(){
    	 return $this->hasMany(ProducaoAgricultor::class, 'agricultor_id');
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
