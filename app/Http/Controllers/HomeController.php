<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index() {
        $user = Auth::user();

        if($user->hasRole("Administrador")){
            dd('Em Construção...');
        }

        if($user->hasRole("Agricultor")){
           return redirect()->route('agricultor.index');
        }

        if($user->hasRole("Cooperativa")){
            return view('layouts/app');
            dd('Cooperativa');
        }

        if($user->hasRole("Secretaria")){
            return redirect()->route('secretaria.index');
            dd('Secretaria');
        }
    }

}
