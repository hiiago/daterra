<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    public function edital(){
        return $this->hasMany(Edital::class, 'secretaria_id');
    }
}
