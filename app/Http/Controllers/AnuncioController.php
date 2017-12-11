<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Anuncio;


class AnuncioController extends Controller
{
    public function index(){
    	//Obtém todos os anúncios
    	$anuncios = Anuncio::all();

    	//retorna a visão passando os anúncios
        return view('anuncio', compact('anuncios'));
    }

    public function show($id)
    {   
        //Busca no banco o anúncio específico
        $anuncio = Anuncio::find($id);

        //retorna a visão passando o anúncio
        return view('produto', compact('anuncio'));
    }
}
