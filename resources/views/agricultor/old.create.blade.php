@extends('master')

@section('content')

    <div class="container">
        <p><a href="{{ url('/shop') }}">Shop</a> / {{ $anuncio->titulo }}</p>
        <h1>{{ $anuncio->titulo }}</h1>

        <hr>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/anuncios/' . $anuncio->imagem) }}" alt="product" class="img-responsive">
            </div>

            <div class="col-md-8">
                <h3>${{ $anuncio->preco }}</h3>
                <form action="" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" nome="id" value="{{ $anuncio->id }}">
                    <input type="hidden" nome="nome" value="{{ $anuncio->titulo }}">
                    <input type="hidden" nome="preco" value="{{ $anuncio->preco }}">
                    <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
                </form>

                <form action="" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" nome="id" value="{{ $anuncio->id }}">
                    <input type="hidden" nome="nome" value="{{ $anuncio->titulo }}">
                    <input type="hidden" nome="preco" value="{{ $anuncio->preco }}">
                    <input type="submit" class="btn btn-primary btn-lg" value="Add to Wishlist">
                </form>


                <br><br>

                {{ $anuncio->descricao }}
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->

        <div class="spacer"></div>


        <div class="spacer"></div>


    </div> <!-- end container -->

@endsection
