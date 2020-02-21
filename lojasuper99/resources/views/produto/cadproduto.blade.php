@extends('layout')
@section('pagina_titulo', 'Cadastro de Produto' )

@section('pagina_conteudo')

<div id="container-login" class="container">
    <div id="login" class="row">
        <div class="col l10 offset-l1 s12 m12">
            <h4>Cadastrar Produto</h4>
            <br>

            @if(isset($produto))
            <form method="POST" action="{{route('produto.update', $produto)}}">
                {!! method_field('PUT') !!}
                @else
                <form method="POST" action="{{ url('new-product') }}">
                    @endif
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field">
                            <input id="nome" type="text" name="nome" value="{{$produto->nome or old('nome') }}" class="validate {{ $errors->has('nome') ? ' invalid' : '' }}">
                            <label id="nome" for="nome" data-error="{{ $errors->has('nome') ? $errors->first('nome') : null }}">Nome Produto</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input id="nome" type="text" name="descricao" value="{{$produto->descricao or old('descricao') }}" class="validate {{ $errors->has('descricao') ? ' invalid' : '' }}">
                            <label id="nome" for="descricao" data-error="{{ $errors->has('descricao') ? $errors->first('descricao') : null }}">Descrição do produto</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input id="nome" type="int" name="valor" value="{{$produto->valor or old('valor') }}" class="validate {{ $errors->has('valor') ? ' invalid' : '' }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input id="nome" type="text" name="imagem" value="{{$produto->imagem or old('imagem') }}" class="validate {{ $errors->has('imagem') ? ' invalid' : '' }}">
                            <label id="nome" for="imagem" data-error="{{ $errors->has('imagem') ? $errors->first('imagem') : null }}">Imagem do Produto</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input id="ativo" type="checkbox" name="ativo" value="{{$produto->ativo or old('ativo') }}" class="validate {{ $errors->has('ativo') ? ' invalid' : '' }}" @if(isset($produto) && $produto->active == '1')checked @endif >
                            <label id="ativo" for="ativo" data-error="{{ $errors->has('ativo') ? $errors->first('ativo') : null }}">Produto Ativo ?</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <div class="col-auto my-1">
                                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Categorias</option>
                                    <option value="Utensílios Domésticos">Utensílios Domésticos</option>
                                    <option value="Utensílios Domésticos">Artigos de Camping</option>
                                    <option value="Brinquedos">Brinquedos</option>
                                    <option value="Linha para bebes">Linha para bebes</option>
                                    <option value="Tabacaria">Tabacaria</option>
                                    <option value="Confecções">Confecções</option>
                                    <option value="Enfeites e Festas">Enfeites e Festas</option>
                                    <option value="Maquiagens">Maquiagens</option>
                                    <option value="Manicure e Pedicure">Manicure e Pedicure</option>
                                    <option value="Petshop">Petshop</option>
                                </select>
                            </div>
                        </div>
                    </div>
        </div>

        <div class="row">
            <button id="botao" type="submit" class="btn blue waves-effect waves-light col l3 m6 s12" style="right: -100px;">
                Cadastrar
            </button>
        </div>
        </form>
    </div>
</div>
</div>

<style>
    h4 {
        font-size: 4.00rem;
    }

    #nome {
        font-size: 2.00rem;
    }

    #login {
        border-style: solid;
        border-color: #4d94ff;
        border-radius: 50px;
        border-width: 22px;
        box-shadow: 0.2em 0.1em 1.2em black;
    }
</style>

@endsection