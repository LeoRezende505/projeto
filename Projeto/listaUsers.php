<?php
	session_start();
	if(isset($_SESSION['logado'])){
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Lista de Usuários</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="container">
			<header>
				<h1>Lista de Usuários</h1>
			</header>
			<nav>
				<?php include('menu.php'); ?>
			</nav>
			<section>
				<div class="consulta">
					<table class="table table-bordered table-striped">
						<thead>	
							<tr>
								<th>Usuário</th>
								<th>Avatar</th>
								<th>Email</th>
								<th>Data</th>
								<th>Mudar Senha</th>
								<th>Mudar Avatar</th>
								<th>Excluir</th>
							</tr>
						</thead>
						<tbody>
							<?php
								require('usuario.php');
								$usuario = new usuario();

								$listar = $usuario->listar();
										

								while($linha = $listar->fetch_assoc()){
									$id = $linha['idUsuario'];
									$usuario = $linha['usuario'];
									$avatar = $linha['avatar'];
									$email = $linha['email'];
									$data = $linha['data'];
									$data = date('d/m/Y - H:i:s',strtotime($data));

									echo "
										<tr>
											<td> $usuario </td>
											<td> <img src='img/usuarios/$avatar' 
											alt='$usuario' class='avatar' /></td>
											<td> $email </td>
											<td> $data </td>

											<td class='icon'><a href='mudaSenha.php?id=$id'><img src='img/botoes/password.png' alt='Mudar Senha'></a></td>
											
											<td class='icon'><a href='mudarAvatar.php?id=$id'><img src='img/botoes/avatar.png' alt='Mudar Avatar'></a></td>							
											
											<td class='icon'>
											<a onclick='return confirm(\"Tem certeza?\");'
											href='excluirUser.php?id=$id'>
											<img src='img/delete.png' alt='excluir'></a></td>
										</tr>";
								}
								?>
						</tbody>
					</table>		
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