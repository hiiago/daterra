@extends('layouts.app')

@section('main-content')

    <div class="container">
        
        <h1></h1>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                @section('contentheader_title')
                <div class="pull-left">
                    <h2>{{ $anuncio->titulo }}</h2>
                    
                </div>
                @endsection
            </div>
        </div>
        <br>

        <hr>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/anuncios/' . $anuncio->imagem) }}" alt="product" class="img-responsive">
            </div>

            <div class="col-md-8">
                <h3>${{ $anuncio->preco }}</h3>

                <h3>Informações:</h3>
                <p>
                    <strong>Nome:</strong><br>{{$anuncio->agricultor->usuario->name}}<br><br>

                    <strong>O que produz:</strong><br>
                    @foreach($anuncio->agricultor->producao as $producao)
                        {{$producao->producao}}<br>
                    @endforeach
                    <br>

                    <strong>Localização:</strong><br>
                    <strong>Estado: </strong>{{$anuncio->agricultor->estado}}<br>
                    <strong>Cidade: </strong>{{$anuncio->agricultor->cidade}}<br>
                    <strong>Rua: </strong>{{$anuncio->agricultor->rua}} nº {{$anuncio->agricultor->numero}}<br>
                    <strong>CEP: </strong>{{$anuncio->agricultor->cep}}<br><br>

                    <strong>Contatos:</strong><br>
                    <strong>Email: </strong>{{$anuncio->agricultor->usuario->email}}<br>
                    <strong>Telefone: </strong>{{$anuncio->agricultor->telefone}}<br>
                    <strong>Celular: </strong>{{$anuncio->agricultor->celular}}<br>
                    <strong>Whatsapp: </strong>{{$anuncio->agricultor->whatsapp}}<br><br>

                    <strong>Descrição do anúncio:</strong><br>
                    {{$anuncio->descricao}}<br>

                </p>
                
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->

        <div class="spacer"></div>


        <div class="spacer"></div>


    </div> <!-- end container -->

@endsection
