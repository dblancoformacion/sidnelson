<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>La Luna</title>
	<?php
		include_once "libreria.php"; 
		sql2js('grupos','nelson_laluna',"
			SELECT DISTINCT grupo FROM articulos;
			");
		if(isset($_GET['grupo'])) 
			sql2js('articulos','nelson_laluna',"
				SELECT * FROM articulos WHERE grupo='".$_GET['grupo']."';
				");
	?>
	<link rel="stylesheet" style="text/css" href="1.css">
	<script type="text/javascript" src="1.js"></script>
</head>
<body>
<!-- **************************************************************** INICIO BODY **************************************************************** -->
<div class="container-fluid">
	<div class="header bg-dark p-3">
		<div class="titulo">Las lunas</div>
		<div class="titulo">El Chiringuito</div>
		<div class="spacer"></div>
	</div>
	<div class="contenido bg-light">
		<div class="container">
			<div>
				<button type="button" class="btn btn-outline-success">Recogida en Local</button>
				<button type="button" class="btn btn-outline-success">Reparto a domicilio</button>
			</div>
		</div>
	</div>
	<div class="footer bg-dark">
		
	</div>
	
</div>

	<!-- <a href="?grupo=Pizzas">Pizzas</a> -->
<!-- **************************************************************** FIN BODY ******************************************************************* -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</body>
</html>