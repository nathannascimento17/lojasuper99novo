@extends('layout')
@section('pagina_titulo', $registro->nome )

@section('pagina_conteudo')

<div class="container">
    <div class="row">
        <h3 id="label-nome-produto">{{ $registro->nome }}</h3>
        <div class="divider"></div>
        <div class="section col s12 m6 l3">
            <div class="card small">
                <img class="col s12 m12 l12 materialboxed" data-caption="{{ $registro->nome }}" src="{{ $registro->imagem }}" alt="{{ $registro->nome }}" title="{{ $registro->nome }}">
            </div>
        </div>
        <div class="section col s12 m6 l9">
            <h4 id="label-preco" class="left col l10"> R$ {{ number_format($registro->valor, 2, ',', '.') }} </h4>
            <form method="POST" action="{{ route('carrinho.adicionar') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $registro->id }}">
                <button id="btn-comprar" class="btn-large col l6 m6 s6 green accent-4 tooltipped" data-position="bottom" data-delay="50" data-tooltip="O produto será adicionado ao seu carrinho">Comprar</button>
            </form>
        </div>
        <div id="tab-descricao" class="section col s12 m6 l10">
            {!! $registro->descricao !!}
        </div>
    </div>
</div>


<style>
    #label-nome-produto {
        font-size: 5.00rem;
        color: yellow;
        font-family: Stencil Std, fantasy;
        text-shadow: 0.2em 0.1em 0.2em #FF0000;
    }

    #label-preco {
        margin-top: 60px;
        font-size: 6.00rem;
        color: green;
    }

    #btn-comprar {
        height: 85px;
        margin-top: 50px;
        position: relative;
        left: 9px;
        font-size: 4.00rem;
    }

    #tab-descricao {
        margin-top: 90px;
        font-size: 2.00rem;
    }
</style>


@endsection