<?php
	session_start();
	if(isset($_SESSION['logado'])){
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		
		<center>
				<?php include('header.php'); ?>
				</center>
		<title>MODO ADMINISTRADOR</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<div class="container">
			<header>
				<h1>MODO ADMINISTRADOR</h1>
			</header>
			<nav> <center>
				<?php include('menu.php'); ?>
				</center>
			<section>
				<div class="cadastra">
					<div class="botoes">
						<figure>
							<a href="criaUser.php">
								<img src="img/botoes/new_user.png" />
								<figcaption>Criar Perfil</figcaption>
							</a>
						</figure>
						
						<figure>
							<a href="listaUsers.php">
								<img src="img/botoes/user_list.png" />
								<figcaption>Ver Perfis</figcaption>
							</a>		
						</figure>
						
						<figure>
							<a href="listaUsers.php">
								<img src="img/botoes/password.png" />
								<figcaption>Mudar senha</figcaption>
							</a>
						</figure>
						
						<figure>
							<a href="listaUsers.php">
								<img src="img/botoes/avatar.png" />
								<figcaption>Mudar Imagem de Perfil</figcaption>
							</a>
						</figure>	
					</div>
					<?php
						if(isset($_GET['msg'])){
							if($_GET['msg'] == 'del'){
								echo "<h2 class='msg'>Usuário Excluído!</h2>";	
							}elseif($_GET['msg'] == 'edit'){
								echo "<h2 class='msg'>Usuário Atualizado com sucesso!</h2>";	
							}elseif($_GET['msg'] == 'insert'){
								echo "<h2 class='msg'>Usuário cadastrado com sucesso!</h2>";	
							}
						}
					?>	
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