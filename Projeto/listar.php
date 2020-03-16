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
					<?php
						if(isset($_GET['msg'])){
							if($_GET['msg'] == 'del'){
								echo "<h2 class='msg'>Cadastro Excluído!</h2>";	
							}elseif($_GET['msg'] == 'edit'){
								echo "<h2 class='msg'>Cadastro Alterado com sucesso!</h2>";	
							}elseif($_GET['msg'] == 'insert'){
								echo "<h2 class='msg'>Cadastrado com sucesso!</h2>";	
							}
						}
					?>
					<table class="table table-bordered table-striped">
						<thead>	
							<tr>
								<th>Nome</th>
								<th>Descrição</th>
								<th>Valor</th>
								<th>Data</th>
								<th>Imagem</th>
								<th>Editar</th>
								<th>Excluir</th>
							</tr>
						</thead>
						<tbody>
							<?php include('listagem.php'); ?>
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