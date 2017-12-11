<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anuncio extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function categoria(){
        return $this->hasOne(CategoriaAnuncio::class, 'categoria_id');
    }

    public function agricultor(){
        return $this->belongsTo(Agricultor::class, 'agricultor_id');
    }
}
