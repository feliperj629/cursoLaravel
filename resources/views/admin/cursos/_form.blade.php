<dir class="input_field">
	<input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
	<label>Título</label>
</dir>
<dir class="input_field">
	<input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
	<label>Descrição</label>
</dir>
<dir class="input_field">
	<input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
	<label>Valor</label>
</dir>
<dir class="file-field input_field">
	<div class="btn blue">
		<span>Imagem</span>
		<input type="file" name="imagem">	
	</div>
	<div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</dir>

@if(isset($registro->imagem))
	<div class="input_field">
		<img width="150" src="{{asset($registro->imagem)}}">
	</div>
@endif

<div class="input_field">
	<p>
      <input type="checkbox" id="publicar" name="publicado" {{isset($registro->publicado) && $registro->publicado=='sim' ? 'checked' : ''}} value="true" />
      <label for="publicar">Publicar?</label>
    </p>
    <br>  <br>
</div>