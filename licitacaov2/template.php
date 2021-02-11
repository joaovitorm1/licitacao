<!doctype html>
<html>
<head>
    <title>Licitação | Prefeitura Municipal De Porto Seguro</title>
    <meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/icon" href="img/logo_260x124.png">



    <base href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/licitacaov2/">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>

<link rel="stylesheet" href="dist/css/signika-bold.ttf">
  <link rel="stylesheet" href="dist/css/signa-bold-normal.ttf">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/head.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>



    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    <link rel="stylesheet" href="./css/styles.css" />
    <script src="https://kit.fontawesome.com/2809acce50.js" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-169653867-1"></script>
</head>
<body>
<div class="countainer">

<nav class="navbar navbar-expand-lg navbar-light bg-primary navbar navbar-default navbar-fixed-top" >
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="img/logo_260x124.png" alt="prefeitura de porto seguro Logo" width="150px;"  style="opacity: .8">
        <span class="brand-text font-weight-light"></span>
      </a>

      <button class="navbar-toggler order-1 collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav m-auto">
          <li class="">
            <a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>" class="nav-link text-light"><i class="far fa-home-lg-alt"></i>inicio</a>
          </li>
          <li class="">
            <a href="https://Portoseguro.ba.gov.br" class="nav-link text-light">Site Oficial</a>
          </li>
		  <li class="">
            <a href="http://www.acessoinformacao.com.br/ba/portoseguro/diario-externo.php" class="nav-link text-light">Diario Oficial</a>
          </li>
		  <li class="">
            <a href="http://www.acessoinformacao.com.br/ba/portoseguro/" class="nav-link text-light">Transparencia</a>
          </li>
		  <li class="">
            <a href="https://portoseguro.ba.gov.br/regiao" class="nav-link text-light">Nóticias</a>
          </li>
        </ul>
      </div>
      <!-- Right navbar links -->
    </div>
	
  </nav>
<div class="row">
		<div class="col-sm-2 bg-success mosaico">
			<hr hidden>	
		</div>
		<div class="col-sm-2 bg-danger mosaico">
			<hr hidden>	
		</div>
		<div class="col-sm-2 bg-warning mosaico">
			<hr hidden>	
		</div>
		<div class="col-sm-2 bg-success mosaico">
			<hr hidden>	
		</div>
		<div class="col-sm-2 bg-danger mosaico">
			<hr hidden>	
		</div>
		<div class="col-sm-2 bg-warning mosaico">
			<hr hidden>	
		</div>
	</div>
<div class="container">

    <div class="row">
        <div class="col-sm-9 mt-4">
            <h4 style="font-weight:bold; text-align:right; color:#cccccc; margin-top:2rem;"> Acesso a informação </h4>
            <h2 style="font-weight:bold; text-align:right; line-height: 0; border:none; ">      Licitações </h2>


        </div>
    </div>
    <div class="col-sm-12">
<!-- Content -->
<?php
if(file_exists('pages/'.$pagename.'.php')) {
    require('pages/'.$pagename.'.php');
}else {
    require('pages/home.php');
}
?>
    </div>
</div>
<!-- Content -->
<div>

  <div class="bg-primary">
  <div class="row">
	<div class="col-sm-2 bg-success mosaico">
		<hr hidden>	
	</div>
	<div class="col-sm-2 bg-danger mosaico">
		<hr hidden>	
	</div>
	<div class="col-sm-2 bg-warning mosaico">
		<hr hidden>	
	</div>
	<div class="col-sm-2 bg-success mosaico">
		<hr hidden>	
	</div>
	<div class="col-sm-2 bg-danger mosaico">
		<hr hidden>	
	</div>
	<div class="col-sm-2 bg-warning mosaico">
		<hr hidden>	
	</div>
</div>
    <!-- To the right -->
    <div >
      Prefeitura de Porto Seguro
    </div>
    <!-- Default to the left -->
    <strong>Copyright © 2021 João Vitor S. Rocha</a>.</strong> 
  </div>
 </div>
 </div>
</body>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>









<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>


<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/jquery.cpfcnpj.js"></script>
</html>