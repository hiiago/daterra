@extends('layouts.app')

@section('htmlheader_title', 'Minha Vitrine')

@section('main-content')

    <div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            @section('contentheader_title')
            <div class="pull-left">
                <h2><i class="fa  fa-users"> Minhas Chamadas Públicas</i></h2>
                
            </div>
            @endsection
        </div>
    </div>

    <br>
  
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif


        <div class="row col-sm-8">
        <div class="card card-secondary-outline m-b-30 bs-callout-line-three">
            <div class="list-group list-group-flush">
                <a class="list-group-item clearfix p-20 m-0  grey-text text-darken-1" href="#" title="clique para mais detalhes">
                    <img class="pull-left m-r-20 m-b-0 hidden-xs" style="width: 60px; max-height: 60px; margin-right: 10px" src="{{ asset('img/chamada/jequie.png') }}">
                    <h4 class="list-group-item-heading text-uppercase m-0 f-400 grey-text text-darken-2">Chamada Pública 01/2017</h4>
                    <p class="list-group-item-text f-300">Prefeitura Jequié</p>
                    <span class="f-400">
                        Envio da proposta até <span class="blue-text text-darken-4">20/12/2017 23:59</span>
                    </span>
                </a>

                <a class="list-group-item clearfix p-20 m-0  grey-text text-darken-1" href="#" title="clique para mais detalhes">
                    <img class="pull-left m-r-20 m-b-0 hidden-xs" style="width: 60px; max-height: 60px; margin-right: 10px" src="{{ asset('img/chamada/jequie.png') }}">
                    <h4 class="list-group-item-heading text-uppercase m-0 f-400 grey-text text-darken-2">Chamada Pública 02/2017</h4>
                    <p class="list-group-item-text f-300">Prefeitura Jequié</p>
                    <span class="f-400">
                        Envio da proposta até <span class="blue-text text-darken-4">20/12/2017 23:59</span>
                    </span>
                </a>

                <a class="list-group-item clearfix p-20 m-0  grey-text text-darken-1" href="#" title="clique para mais detalhes">
                    <img class="pull-left m-r-20 m-b-0 hidden-xs" style="width: 60px; max-height: 60px; margin-right: 10px" src="{{ asset('img/chamada/jequie.png') }}">
                    <h4 class="list-group-item-heading text-uppercase m-0 f-400 grey-text text-darken-2">Chamada Pública 03/2017</h4>
                    <p class="list-group-item-text f-300">Prefeitura Jequié</p>
                    <span class="f-400">
                        Envio da proposta até <span class="blue-text text-darken-4">20/12/2017 23:59</span>
                    </span>
                </a>

                <a class="list-group-item clearfix p-20 m-0  grey-text text-darken-1" href="#" title="clique para mais detalhes">
                    <img class="pull-left m-r-20 m-b-0 hidden-xs" style="width: 60px; max-height: 60px; margin-right: 10px" src="{{ asset('img/chamada/jequie.png') }}">
                    <h4 class="list-group-item-heading text-uppercase m-0 f-400 grey-text text-darken-2">Chamada Pública 04/2017</h4>
                    <p class="list-group-item-text f-300">Prefeitura Jequié</p>
                    <span class="f-400">
                        Envio da proposta até <span class="blue-text text-darken-4">20/12/2017 23:59</span>
                    </span>
                </a>

                <a class="list-group-item clearfix p-20 m-0  grey-text text-darken-1" href="#" title="clique para mais detalhes">
                    <img class="pull-left m-r-20 m-b-0 hidden-xs" style="width: 60px; max-height: 60px; margin-right: 10px" src="{{ asset('img/chamada/jequie.png') }}">
                    <h4 class="list-group-item-heading text-uppercase m-0 f-400 grey-text text-darken-2">Chamada Pública 05/2017</h4>
                    <p class="list-group-item-text f-300">Prefeitura Jequié</p>
                    <span class="f-400">
                        Envio da proposta até <span class="blue-text text-darken-4">20/12/2017 23:59</span>
                    </span>
                </a>

                <a class="list-group-item clearfix p-20 m-0  grey-text text-darken-1" href="#" title="clique para mais detalhes">
                    <img class="pull-left m-r-20 m-b-0 hidden-xs" style="width: 60px; max-height: 60px; margin-right: 10px" src="{{ asset('img/chamada/jequie.png') }}">
                    <h4 class="list-group-item-heading text-uppercase m-0 f-400 grey-text text-darken-2">Chamada Pública 06/2017</h4>
                    <p class="list-group-item-text f-300">Prefeitura Jequié</p>
                    <span class="f-400">
                        Envio da proposta até <span class="blue-text text-darken-4">20/12/2017 23:59</span>
                    </span>
                </a>

                <a class="list-group-item clearfix p-20 m-0  grey-text text-darken-1" href="#" title="clique para mais detalhes">
                    <img class="pull-left m-r-20 m-b-0 hidden-xs" style="width: 60px; max-height: 60px; margin-right: 10px" src="{{ asset('img/chamada/jequie.png') }}">
                    <h4 class="list-group-item-heading text-uppercase m-0 f-400 grey-text text-darken-2">Chamada Pública 07/2017</h4>
                    <p class="list-group-item-text f-300">Prefeitura Jequié</p>
                    <span class="f-400">
                        Envio da proposta até <span class="blue-text text-darken-4">20/12/2017 23:59</span>
                    </span>
                </a>

                <a class="list-group-item clearfix p-20 m-0  grey-text text-darken-1" href="#" title="clique para mais detalhes">
                    <img class="pull-left m-r-20 m-b-0 hidden-xs" style="width: 60px; max-height: 60px; margin-right: 10px" src="{{ asset('img/chamada/jequie.png') }}">
                    <h4 class="list-group-item-heading text-uppercase m-0 f-400 grey-text text-darken-2">Chamada Pública 08/2017</h4>
                    <p class="list-group-item-text f-300">Prefeitura Jequié</p>
                    <span class="f-400">
                        Envio da proposta até <span class="blue-text text-darken-4">20/12/2017 23:59</span>
                    </span>
                </a>

                <a class="list-group-item clearfix p-20 m-0  grey-text text-darken-1" href="#" title="clique para mais detalhes">
                    <img class="pull-left m-r-20 m-b-0 hidden-xs" style="width: 60px; max-height: 60px; margin-right: 10px" src="{{ asset('img/chamada/jequie.png') }}">
                    <h4 class="list-group-item-heading text-uppercase m-0 f-400 grey-text text-darken-2">Chamada Pública 09/2017</h4>
                    <p class="list-group-item-text f-300">Prefeitura Jequié</p>
                    <span class="f-400">
                        Envio da proposta até <span class="blue-text text-darken-4">20/12/2017 23:59</span>
                    </span>
                </a>

                <a class="list-group-item clearfix p-20 m-0  grey-text text-darken-1" href="#" title="clique para mais detalhes">
                    <img class="pull-left m-r-20 m-b-0 hidden-xs" style="width: 60px; max-height: 60px; margin-right: 10px" src="{{ asset('img/chamada/jequie.png') }}">
                    <h4 class="list-group-item-heading text-uppercase m-0 f-400 grey-text text-darken-2">Chamada Pública 10/2017</h4>
                    <p class="list-group-item-text f-300">Prefeitura Jequié</p>
                    <span class="f-400">
                        Envio da proposta até <span class="blue-text text-darken-4">20/12/2017 23:59</span>
                    </span>
                </a>
            </div>
        </div>
    </div> <!-- end row -->

    </div> <!-- end container -->

@endsection