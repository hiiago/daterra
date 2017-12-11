@extends('master')

@section('content')

    <div class="container">

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

        <div class="jumbotron text-center clearfix">
            <img src="{{asset('img/logo.jpg')}}"/>
        </div> <!-- end jumbotron -->

    @foreach ($anuncios->chunk(4) as $items)
            <div class="row">
                @foreach ($items as $anuncio)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <a href="{{ url('anuncio', [$anuncio->id]) }}"><img src="{{ asset('img/anuncios/' . $anuncio->imagem) }}" alt="Anúncio" class="img-responsive"></a>
                                <a href="{{ url('anuncio', [$anuncio->id]) }}"><h3>{{ $anuncio->titulo }}</h3>
                                <p>{{ $anuncio->preco }}</p>
                                </a>
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->
                @endforeach
            </div> <!-- end row -->
        @endforeach

    </div> <!-- end container -->

@endsection