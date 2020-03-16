<?php
	session_start();
	if(isset($_SESSION['logado'])){
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
				<h1>Alteração do Produto</h1>
			</header>
			<nav>
				<?php include('menu.php'); ?>
			</nav>
			<section>
				<div class="cadastra">
					<?php include('form2.php'); ?>
				</div>
			</section>
			</footer>
			
            <?php include('footer.php'); ?>
			
			</footer>		
		</div>
	</body>
</html>	
<?php
	}else{
		header('Location: login.php');
	}
?>