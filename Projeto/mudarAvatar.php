<?php
	session_start();
	if(isset($_SESSION['logado'])){
		$id = $_GET['id'];
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Mudar Avatar</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="container">
			<header>
				<h1>Mudar Avatar</h1>
			</header>
			<section>
				<div class="cadastra">
					<form method="POST" action="avatar.php?id=
					<?php echo $id; ?>" enctype="multipart/form-data">
										
						<input type="file" name="avatar" 
							class="form-control" required />
						<br/>
					
						<input type="submit" 
							class="btn btn-primary"
							value="Mudar Avatar" />
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