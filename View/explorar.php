<div class="container" style="min-height: 60px;"></div>
<div class="container z-depth-1">
	<div class="row">
		<div class="col s12 m3 l3">

			<div class="card">
				<div class="card-image">
					<img src="<?php echo BASE_URL; ?>assets/img/aldeia.jpg">
				</div>
				<div class="card-content center-align">
					<a href="">trocar a foto</a>
				</div>
			</div>
			
		</div>
		<!-- end col s12 m3 l3 -->
		<div class="col  s12 m6 l6">
			<blockquote class="yellow lighten-4">
				<h4 class="orange-text lighten-1">Dados do Sócio</h4>
			</blockquote>
			<p>
				<h5><strong>Nome: </strong> <?php echo $socio['nome_socio']; ?></h5>
				<h6><strong>Nascimento:</strong> <?php echo $socio['dt_nascimento']; ?></h6>
				<h6><strong>Pai:</strong> <?php echo $socio['nome_pai']; ?></h6>
				<h6><strong>Mãe:</strong> <?php echo $socio['nome_mae']; ?></h6>
				<h6><strong>CPF:</strong> <?php echo $socio['cpf']; ?></h6>
				<h6><strong>RG:</strong>  <?php echo $socio['rg']; ?></h6>
			</p>
		</div>
		<!-- end col  s12 m6 l6 -->
		<div class="col s12 m3 l3">
			<div class="row">
				<div class="col s12 m12 l12">
					<blockquote class="yellow lighten-4">
						<h5 class="orange-text lighten-1">Endereço</h5>
					</blockquote>
					<p>
						<strong>Número:</strong> <?php echo $socio['numero'] ?><br>
						<strong>Rua:</strong> <?php echo $socio['rua']; ?><br>
						<strong>Bairro:</strong> <?php echo $socio['bairro']; ?><br>
						<strong>Estado:</strong> <?php echo $socio['nome_estado']."-". $socio['sigla_estado']; ?>
					</p>
				</div>
				<!-- end col s12 m12 l12 -->
				<div class="col s12 m12 l12">
					<blockquote class="yellow lighten-4">
						<h5 class="orange-text lighten-1">Contato</h5>
					</blockquote>
					<p>
						<strong>Telefone:</strong> <?php echo $socio['telefone']; ?><br>
						<strong>E-mail:</strong> <?php echo $socio['email']; ?>
					</p>
				</div>
			</div>
		</div>
		<!-- end col s12 m3 l3 -->
	</div>
</div>

