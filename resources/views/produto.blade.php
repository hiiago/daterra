@extends('master')

@section('content')

    <div class="container">
        <p><a href="{{ url('/anuncio') }}">Anúncios</a> / {{ $anuncio->titulo }}</p>
        <h1>{{ $anuncio->titulo }}</h1>

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
