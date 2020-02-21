@extends('layout')
@section('pagina_titulo', 'Painel Adiministrativo')

@section('pagina_conteudo')

<h1>LISTAGEM DE PRODUTOS</h1>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nome Produto</th>
        <th>Valor</th>
        <th>Ativo</th>
        <th>Categoria</th>
        <th>
        <a href="{{ route('produto.cadproduto') }}">Cadastrar Novo Produto
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </th>
    </tr>
    @foreach($produtos as $produto)
    <tr>
        <td>{{$produto->id}}</td>
        <td>{{$produto->nome}}</td>
        <td>{{$produto->valor}}</td>
        <td>{{$produto->ativo}}</td>
        <td>{{$produto->categoria}}</td>
        <td>
            <a href="{{route('produto.edit', $produto)}}">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
            <a href="">
                <span class="glyphicon glyphicon-trash"></span>
            </a>


        </td>
    </tr>
    @endforeach
</table>

@endsection