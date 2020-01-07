<div class="container">
	<form method="POST">
		<div class="row">
			<div class="col s12">
				<div class="input-field col s12">
					<select name="filtro">
						<option value="0" selected>Nome</option>
						<option value="1">RG</option>
						<option value="2">CPF</option>
					</select>
					<label>Buscar por..</label>
				</div>
				<div class="input-field col s12">
					<input id="buscar" type="text" class="validate" name="buscar">
					<label for="buscar">Digite algo</label>
				</div>
			</div>
			<div class="col s12 center-align">
				<button class="waves-effect waves-orange btn-large lime darken-3">Buscar</button>
			</div>
		</div>
	</form>
</div>
<div class="container" style="min-height: 100px;"></div>
<table class="responsive-table">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Data Nasc.</th>
			<th>N° RG</th>
			<th>N° CPF</th>
			<th>Pai</th>
			<th>Mãe</th>
			<th>Telefone</th>
			<th>Endereço</th>
			<th>Cidade</th>
			<th>Estado</th>
			<th>Ações</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($socios as $socio):?>
			<tr>
				<td><?php echo $socio['nome_socio']; ?></td>
				<td><?php echo $socio['dt_nascimento']; ?></td>
				<td><?php echo $socio['rg']; ?></td>
				<td><?php echo $socio['cpf']; ?></td>
				<td><?php echo $socio['nome_pai']; ?></td>
				<td><?php echo $socio['nome_mae']; ?></td>
				<td><?php echo $socio['telefone']; ?></td>
				<td><?php echo "N° ".$socio['numero'].", Rua:".$socio['rua']." <br> Bairro: ".$socio['bairro'];  ?></td>
				<td><?php echo $socio['nome_cidade'] ; ?></td>
				<td><?php echo $socio['sigla_estado']; ?></td>

				
				<td>
					
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>