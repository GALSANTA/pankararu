<div id="index-banner" class="parallax-container">
	<div class="section no-pad-bot">
		<div class="container">
			<h1 class="header center orange-text lighten-1">Aldeia Brejinho da Serra</h1>
			<div class="row center">
				<h3 class="header col s12 orange-text lighten-1"> Sistema de Cadastro</h3>
			</div>
		</div>
	</div>
	<div class="parallax">
		<img src="<?php echo BASE_URL; ?>assets/img/aldeia.jpg" alt="imagem não encontrada">
	</div>
</div>

<div class="row">
	<div class="col s12 m12 l6">
		<div class="row">
			<canvas id="grafico"></canvas>
		</div>
	</div>
	<div class="col s12 m12 l6">
		<div class="row">
			<div class="col s12 m6 l6">
				<a href="<?php echo BASE_URL; ?>cadastro">
					<div class="card orange lighten-1 hoverable">
						<section class="card-content white-text center-align">
							<h6 class="card-title center-align">Cadastrar</h6>
							<i class="material-icons large">person_add</i>
							<p class="pheight">Clique para cadastrar o sócio. Tenha certeza de ter os documentos necessários.</p>
						</section>
					</div>
				</a>
			</div>

			<div class="col s12 m6 l6">
				<a href="<?php echo BASE_URL; ?>buscar">
					<div class="card blue darken-4  hoverable">
						<section class="card-content white-text center-align">
							<h6 class="card-title center-align">Buscar</h6>
							<i class="material-icons large">find_in_page</i>
							<p class="pheight">Clique para buscar, ver e excluir dados de qualquer indigena que esteja cadastrado.</p>
						</section>
					</div>
				</a>
			</div>

		</div>
		<div class="row">
			<div class="col s12 m6 l6">
				<a href="<?php echo BASE_URL; ?>lista">
					<div class="card  lime darken-3  hoverable">
						<section class="card-content white-text center-align">
							<h6 class="card-title">Gerar Lista</h6>
							<i class="material-icons large">format_list_bulleted</i>
							<p class="pheight">Clicando aqui você pode gerar um PDF com todos os Índios cadastrados no sistema.</p>
						</section>
					</div>
				</a>
			</div>
			<div class="col s12 m6 l6">
				<a href="<?php echo BASE_URL; ?>carteira">
					<div class="card orange darken-3 hoverable">
						<section class="card-content white-text center-align">
							<h6 class="card-title">Carteirinha</h6>
							<i class="material-icons large">group</i>
							<p class="pheight">Clique para poder gerar um arquivo word com as carteirinhas dos Índios selecionados.</p>
						</section>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<script>
	var contexto = document.getElementById("grafico").getContext("2d");

	var myDoughnutChart = new Chart(contexto, {
		type: 'doughnut',
		data: {
			labels: ['Abaixo dos 18 anos', 'entre 18 e 50 anos', 'Acima dos 50 anos'],
			datasets: [{
				backgroundColor: ['#0d47a1', '#9e9d24', '#ef6c00'],
				data: [<?php echo $menor18; ?>, <?php echo $maior18; ?>, <?php echo $maior80; ?>],
				borderWidth: 5,
				fill: false
			}],
		}
	});
</script>