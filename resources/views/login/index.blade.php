@extends('layouts.site')
@section('titulo', 'Cursos')

@section('conteudo')
	<div class="container">
		<h3 class="center">Entrar no Sistema</h3>
		<div class="row">
			<form class="" action="{{route('site.login.entrar')}}" method="post" >
				{{csrf_field() }}

				<dir class="input_field">
					<input type="text" name="email">
					<label>E-Mail</label>
				</dir>
				<dir class="input_field">
					<input type="password" name="senha">
					<label>Senha</label>
				</dir>

				<button class="btn deep-orange">Entrar</button>
			</form>
		</div>
	</div>

@endsection