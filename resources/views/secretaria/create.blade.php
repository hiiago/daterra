@extends('layouts.app')

@section('main-content')

    <div class="container">
        
    
        <div class="row">
            <div class="col-lg-12 margin-tb">
                @section('contentheader_title')
                <div class="pull-left">
                    <h2>Nova Chamada Pública</h2>
                    
                </div>
                @endsection
            </div>
        </div>
        <br>

        <div class="row">
            <div class="form-group col-sm-8">
                <div class="form-group">
                    <strong>Título da Chamada</strong>
                    <input maxlength="256" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <strong>Data limite para propostas</strong>
                    <input maxlength="256" class="form-control" type="datetime-local">
                </div>

                <div class="form-group">
                    <strong>Descrição</strong>
                    <textarea class="form-control" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <strong>Selecione o edital em pdf</strong>
                    <input type="file" >
                </div>

                <div class="pull-right">
                    <button type="button" class="btn btn-success">
                      <span class="glyphicon glyphicon-floppy-disk"> Salvar</span>
                    </button>
                    <button type="button" class="btn btn-danger">
                      <span class='glyphicon glyphicon-remove'></span> Cancelar
                    </button>
                </div>
                

            </div>  
        </div> <!-- end row -->

    </div> <!-- end container -->

@endsection
