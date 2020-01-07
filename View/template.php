<!DOCTYPE html>
<html lang="br">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="keywords" content="pankararu, Pankararu, índio, brejinho, aldeia pankararu" />


	<meta property="og:url" content="http://sistema.aldeiabrejinhodaserra.com.br/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Aldeia Brejinho da Serra | Sistema" />
	<meta property="og:description" content="Aldeia Brejinho da Serra" />
	<meta property="og:image" content="https://aldeiabrejinhodaserra.com.br/assets/img/aldeia.jpg" />
	<meta property="og:site_name" content="Sistema de cadastro Aldeia Brejinho da Serra" />

	<title>Sistema | Aldeia Brejinho da Serra</title>
	<link rel="shortcut icon" type="imagem/x-icon" href="<?php echo BASE_URL; ?>assets/img/ico.png" />

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?php echo BASE_URL; ?>assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
	
	<!-- JAVASCRIPT  -->
	<script src="<?php echo BASE_URL; ?>assets/js/chart.min.js"></script>
</head>

<body>
	<header>
		<nav>
			<div class="nav-wrapper orange darken-3">
				<a data-target="slide-out" class="sidenav-trigger">
					<i class="material-icons orange darken-3">menu</i>
				</a>
				<a href="<?php echo BASE_URL; ?>home" class="brand-logo">
					<img class="imgresisable" src="<?php echo BASE_URL; ?>assets/img/logo.png" style="height: 50px;">
				</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="<?php echo BASE_URL; ?>" class="white-text">Início</a></li>
					<li><a href="https://aldeiabrejinhodaserra.com.br/" class="white-text">Aldeia</a></li>
					<li><a href="collapsible.html" class="white-text">Sobre</a></li>
					<li><a href="<?php echo BASE_URL; ?>/login/sair" class="white-text">Sair</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<main style="min-height: 600px">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</main>
	<footer class="page-footer orange darken-4">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Aldeia Brejinho da Serra</h5>
					<div class="video-container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1744.069706987999!2d-38.26166170800602!3d-9.124187116587542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwMDcnMjcuMSJTIDM4wrAxNSczNy43Ilc!5e1!3m2!1spt-BR!2sbr!4v1563844005468!5m2!1spt-BR!2sbr" width="400" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Contato</h5>
					<ul>
						<li>
							<h6>Josenilda Marques</h6><a href="tel:+5587996231637">+55 (87) 99623-1637</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">

				© 2019 Copyright Todos os direitos reservados

			</div>
		</div>
	</footer>
	<ul id="slide-out" class="sidenav">
		<li><a href="<?php echo BASE_URL; ?>" class="black-text">Início</a></li>
		<li><a href="https://aldeiabrejinhodaserra.com.br/" class="black-text">Aldeia</a></li>
		<li><a href="collapsible.html" class="black-text">Sobre</a></li>
		<li><a href="<?php echo BASE_URL; ?>/login/sair" class="black-text">Sair</a></li>
	</ul>

	<!--  Scripts-->
	<script src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/materialize.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/init.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/plugin/jquery.mask.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	
	
</body>

</html>