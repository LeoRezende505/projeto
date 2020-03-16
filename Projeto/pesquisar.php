<?php
	session_start();
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Lista de Produtos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
		<center>
				<?php include('header.php'); ?>
				</center>
	</head>
	<body>
		<div class="container">
			<header>
				
			</header>
			<nav> <center>
				<?php include('menu.php'); ?>
				</center>
				
			<section>
				
				<div class="consulta">
					<?php include('pesquisa.php'); ?>
				</div>	

			</section>	

			<section>		
					<?php
					
						if(isset($_POST['submit'])){
							$txt = "%{$_POST['txt']}%";
							require_once('produtos.php');
							$produto = new produto();
							$pesquisa = $produto->pesquisa($txt);
							
					}
					?>
			</section>
			</footer>
			
            <?php include('footer.php'); ?>
			
			</footer>		
		</div>
	</body>
</html>	