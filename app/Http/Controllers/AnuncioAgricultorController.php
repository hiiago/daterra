<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Anuncio;
use Auth;

class AnuncioAgricultorController extends Controller
{
    
    public function index(){
        $anuncios = Anuncio::where('agricultor_id', Auth::user()->agricultor->id)->paginate(6);

        return view('agricultor.anuncio', compact('anuncios'));
    }

    public function create(){
    	return view('agricultor/create');
    }

    public function show($id){
        $anuncio = Anuncio::find($id);

        return view('agricultor.produto', compact('anuncio'));
    }

    public function store(Request $request)
    {   
        $data = $request->all();
        
        $validator = Validator::make($data, [
            'titulo' => 'required',
            'preco' => 'required',
            'descricao' => 'required',
            'imagem' => 'required',
        ]);

        if($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $anuncio = new Anuncio();
        $anuncio->titulo = $request->titulo;
        $anuncio->preco = $request->preco;
        $anuncio->descricao = $request->descricao;
        $anuncio->imagem = $request->imagem;
        $anuncio->categoria_id = $request->categoria_id;
        $anuncio->agricultor_id = $request->agricultor_id;
        $anuncio->save();

        return response()->json();
    }
}
