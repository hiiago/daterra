<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Agricultor;
use App\Cooperativa;

class UserController extends Controller
{
    public function storeAgricultor(Request $request){
    	$data = $request->all();
        
        $validator = Validator::make($data, [
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'cpf' => 'required|unique:agricultors',
            'rg' => 'required|unique:agricultors',
            'password' => 'required',
            'dap' => 'required',
            'uf' => 'required',
            'cidade' => 'required',
        ]);

        if($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $usuario = new User();
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->senha);
        $usuario->dap = $request->dap;
        $usuario->celular = $request->celular;
        $usuario->telefone = $request->telefone;
        $usuario->whatsapp = $request->whatsapp;
        $usuario->uf = $request->uf;
        $usuario->cidade = $request->cidade;
        $usuario->save();
        $usuario->attachRole('Agricultor');

        $agricultor = new Agricultor();
        $agricultor->cpf = $request->cpf;
        $agricultor->rg = $request->rg;
        $agricultor->save();

        return response()->json();
    }

    public function storeCooperativa(Request $request){
    	$data = $request->all();
        
        $validator = Validator::make($data, [
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'cnpj' => 'required|unique:cooperativas',
            'password' => 'required',
            'dap' => 'required',
            'uf' => 'required',
            'cidade' => 'required',
        ]);

        if($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $usuario = new User();
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->senha);
        $usuario->dap = $request->dap;
        $usuario->celular = $request->celular;
        $usuario->telefone = $request->telefone;
        $usuario->whatsapp = $request->whatsapp;
        $usuario->uf = $request->uf;
        $usuario->cidade = $request->cidade;
        $usuario->save();
        $usuario->attachRole('Cooperativa');

        $cooperativa = new Cooperativa();
        $cooperativa->cnpj = $request->cnpj;
        $cooperativa->razao_social = $request->razao_social;
        $cooperativa->nome_fantasia = $request->nome_fantasia;
        $cooperativa->user_id = $usuario->id;
        $cooperativa->save();

        return response()->json();
    }
}
