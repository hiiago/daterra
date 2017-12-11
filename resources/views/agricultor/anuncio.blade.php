@extends('layouts.app')

@section('htmlheader_title', 'Minha Vitrine')

@section('main-content')

    <div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            @section('contentheader_title')
            <div class="pull-left">
                <h2><i class="fa  fa-users"> Minha Vitrine</i></h2>
                
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


    @foreach ($anuncios->chunk(3) as $items)
            <div class="row">
                @foreach ($items as $anuncio)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <a href="{{ url('agricultor/anuncio', [$anuncio->id]) }}"><img src="{{ asset('img/anuncios/' . $anuncio->imagem) }}" alt="Anúncio" class="img-responsive"></a>
                                <a href="{{ url('agricultor/anuncio', [$anuncio->id]) }}"><h3>{{ $anuncio->titulo }}</h3>
                                <p>{{ $anuncio->preco }}</p>
                                </a>
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->
                @endforeach
            </div> <!-- end row -->
        @endforeach

        {{ $anuncios->links() }}

    </div> <!-- end container -->

@endsection