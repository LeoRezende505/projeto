<?php
	session_start();
	if(isset($_SESSION['logado'])){
		$id = $_GET['id'];
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Mudar a foto</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="container">
			<header>
				<h1>Mudar a foto</h1>
			</header>
			<nav>
				<?php include('menu.php'); ?>
			</nav>
			<section>
				<div class="cadastra">
					<form method="POST" action="foto.php?id=
					<?php echo $id; ?>" enctype="multipart/form-data">
										
						<input type="file" name="foto" 
							class="form-control" required />
						<br/>
					
						<input type="submit" 
							class="btn btn-primary"
							value="Mudar a Foto" />
						</form>
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