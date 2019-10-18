@extends('layouts.site')
@section('titulo', 'Contatos')

@section('conteudo')
	<h3>Essa é a view Index</h3>

	@foreach($contatos as $contato)
		<p>Nome: {{$contato->nome}} Tel: {{$contato->tel}}</p>

	@endforeach
@endsection