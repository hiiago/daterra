<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



class ChamadaPublicaSecretariaController extends Controller
{
    public function index(){
        return view('secretaria.index');
    }

    public function create()
    {   
        return view('secretaria.create');
    }
}
