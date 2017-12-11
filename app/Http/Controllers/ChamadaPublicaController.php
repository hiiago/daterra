<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



class ChamadaPublicaController extends Controller
{
    public function index(){
    	//retorna a visão passando os anúncios
        return view('chamadas');
    }

    public function show($id)
    {   
        //Busca no banco o anúncio específico
        $anuncio = Anuncio::find($id);

        //retorna a visão passando o anúncio
        return view('produto', compact('anuncio'));
    }
}
