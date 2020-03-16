<?php
	session_start();
	include 'header.php';
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Lista de Produtos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="container">
			<header>
				
			</header>
			<nav> <center>
				<?php include('menu.php'); ?>
				</center>
			</nav>
			<section>
				<div class="consulta">
					<?php include('consulta.php'); ?>
				</div>
			</section>
			</footer>
			
            <?php include('footer.php'); ?>
			
			</footer>	
		</div>
	</body>
</html>	