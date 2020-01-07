<section class="container center-align">
	<h1 class="orange-text text-darken-3">Dados do Sócio</h1>
</section>
<form class="container" method="POST">
	<div class="row">
		<div class="input-field col s12 m6 l6">
			<input id="nomecompleto" type="text" class="validate" name="nome" required="required">
			<label for="nomecompleto">Nome Completo</label>
		</div>
		<div class="input-field col s12 m6 l6">
			<input id="dt_nascimento" type="text" class="datepicker" name="dt_nascimento">
			<label for="dt_nascimento">Data de Nascimento</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6">
			<input id="pai" type="text" class="validate" name="pai">
			<label for="pai">Nome Completo do pai</label>
		</div>
		<div class="input-field col s12 m6">
			<input id="mae" type="text" class="validate" name="mae">
			<label for="mae">Nome Completo da mãe</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6">
			<input id="cpf" type="text" class="validate" name="cpf" required="required">
			<label for="cpf">Número do CPF</label>
		</div>
		<div class="input-field col s12 m6">
			<input id="rg" type="text" class="validate" name="rg">
			<label for="rg">Número do RG</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m4">
			<input id="nm_residencia" type="text" class="validate" name="numero" required="required">
			<label for="nm_residencia">Número da residência</label>
		</div>
		<div class="input-field col s12 m4">
			<input id="rua" type="text" class="validate" name="rua" required="required">
			<label for="rua">Rua</label>
		</div>
		<div class="input-field col s12 m4">
			<input id="bairro" type="text" class="validate" name="bairro">
			<label for="bairro">Bairro</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6">
			<input id="cidade" type="text" class="validate" name="cidade" required="required">
			<label for="cidade">Cidade</label>
		</div>
		<div class="input-field col s12 m6">
			<select id="estado" name="estado" required="required">
				<option disabled selected>Selecione o estado</option>
				<?php foreach ($estados as $estado) : ?>
					<option value="<?php echo $estado['sigla_estado'];?>">
						<?php echo $estado['nome_estado']."-".$estado['sigla_estado'];?>
					</option>
				<?php endforeach; ?>
			</select>
			<label for="estado">Estado</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6">
			<input id="telefone" type="text" class="validate" name="telefone">
			<label for="telefone">Telefone</label>
		</div>
		<div class="input-field col s12 m6">
			<input id="email" type="text" class="validate" name="email">
			<label for="email">Email</label>
		</div>
	</div>
	<div class="row valign-wrapper center-align">
		<div class="col s12 m6">
			<button class="waves-effect waves-orange btn-large lime darken-3">Cadastrar</button>
		</div>
		<div class="col s12 m6">
			<a id="limpartudo" class="waves-effect waves-orange btn-large lime darken-3">Limpar formulário</a>
		</div>
	</div>
</form>