<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<title>PÁGINA DE LOGIN</title>
	</head>
	<body>
		<div class="container">
		<nav> <center>
				<?php include('header.php'); ?>
				</center>
		<h1>PÁGINA DE LOGIN</h1>
		
		<form method="POST" action="processa.php">	
				<div id="login">
					<input type="text" name="usuario" 
					placeholder="Usuário"
					class="form-control" required />
					<br/>
					<input type="password" name="senha" 
					placeholder="Senha"
					class="form-control" required />
					
					<input type="submit" name="logar" 
					class="btn btn-success"
					id="logar" value="Logar" />
				</div>	
			</form>
			<?php
				if(isset($_GET['erro'])){
					echo "<h3 class='erro'>
						Usuário/senha inválidos!</h3>";
				}
			?>
		</div>
	</body>
</html>	


		
		