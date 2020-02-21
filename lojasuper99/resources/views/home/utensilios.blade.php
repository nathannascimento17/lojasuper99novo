@extends('layout')
@section('pagina_titulo', 'HOME')

@section('pagina_conteudo')

<div class="main">

	<!-- Actual search box -->
	<div class="form-group has-feedback has-search">
		<span class="glyphicon glyphicon-search form-control-feedback"></span>
		<input type="text" class="form-control" placeholder="Buscar Produtos	">
	</div>

</div>
<div class="col-lg-2">

	<h1 class="my-4">Categoria</h1>
	<div class="list-group">
		<a href="#" class="list-group-item">Utensílios Domésticos</a>
		<a href="#" class="list-group-item">Brinquedos</a>
		<a href="#" class="list-group-item">Linha para bebes</a>
		<a href="#" class="list-group-item">Tabacaria</a>
		<a href="#" class="list-group-item">Confecções</a>
		<a href="#" class="list-group-item">Enfeites e Festas</a>
		<a href="#" class="list-group-item">Maquiagens</a>
		<a href="#" class="list-group-item">Manicure e Pedicure</a>
		<a href="#" class="list-group-item">Petshop</a>
	</div>

</div>

<div id="container-produtos-index" class="container">
	<div class="row">
		@foreach($registros as $registro)
		<div id="box-index" class="col s12 m6 l3">
			<div class="card medium">
				<div class="card-image">
					<img src="{{ $registro->imagem }}">
				</div>
				<div class="card-content">
					<span class="card-title grey-text text-darken-4 truncate" title="{{ $registro->nome }}">{{ $registro->nome }}</span>
					<p>R$ {{ number_format($registro->valor, 2, ',', '.') }}</p>
				</div>
				<div class="card-action">
					<a class="blue-text" href="{{ route('produto', $registro->id) }}">Veja mais informações</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

<br>
<br>
<br>
<br>
@endsection