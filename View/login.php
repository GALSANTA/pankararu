<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <meta name="keywords" content="pankararu, Pankararu, índio, brejinho, aldeia pankararu" />

  <!-- META DADOS PARA LINK  --> 
  <meta property="og:url"                content="http://aldeiabrejinhodaserra.com.br/" />
  <meta property="og:type"               content="article" />
  <meta property="og:title"              content="Aldeia Brejinho da Serra"" />
  <meta property="og:description"        content="Aldeia Brejinho da Serra" />
  <meta property="og:image"              content="http://aldeiabrejinhodaserra.com.br/img/aldeia.jpg"/>
  <meta property="og:site_name"          content="Aldeia Brejinho da Serra" />
  

  <title>Aldeia Brejinho da Serra | Login</title>
  <link rel = "shortcut icon" type = "imagem/x-icon" href = "<?php echo BASE_URL; ?>assets/img/icon.ico"/>

  


  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <header>
    <nav>
      <div class="nav-wrapper orange darken-3">
        <a href="<?php echo BASE_URL; ?>home" class="brand-logo">
          <img class="responsive-img" src="<?php echo BASE_URL; ?>assets/img/logo.png" style="height: 50px;">
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="<?php echo BASE_URL; ?>" class="white-text">Home</a></li>
          <li><a href="https://aldeiabrejinhodaserra.com.br" class="white-text">Sobre</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <main class="valign-wrapper"style="min-height: 600px;">

    <div class="container valign-wrapper">
      <div class="row orange lighten-5">
        <div class="col s12">
          <img class="responsive-img" src="<?php echo BASE_URL; ?>assets/img/logo.png" style="height: 150px;">
        </div>
        <form method="POST">
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input id="email" type="email" class="validate" name="email">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">https</i>
            <input id="password" type="password" class="validate" name="senha">
            <label for="password">Senha</label>
          </div>
          <div class="col s12 center-align">
            <button class="waves-effect waves-orange btn-large lime darken-3">Logar</button>
          </div>
        </form>
      </div>
    </div>

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
          <li><h6>Josenilda Marques</h6><a href="tel:+5587996231637">+55 (87) 99623-1637</a></li>
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

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>


</body>
</html>
