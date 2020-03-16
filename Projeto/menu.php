<?php
	
	if(isset($_SESSION['logado'])){
	echo "
	<a href='index.php'>
		<button class='btn btn-success'>Pagina Inicial</button></a>
	<a href='cadastrar.php'>
		<button class='btn btn-success'>Cadastrar</button></a>
	<a href='listar.php'>	
		<button class='btn btn-success'>Produtos</button></a>
	<a href='pesquisar.php'>	
		<button class='btn btn-success'>Procurar</button></a>
	<a href='sair.php' onclick='return confirm(\"Ten certeza que deseja sair?\");'>	
		<button class='btn btn-success'>Sair</button></a>";		
	}else{
		echo "
			<a href='index.php'>
				<button class='btn btn-success'>Consultar</button></a>
			<a href='pesquisar.php'>	
				<button class='btn btn-success'>Pesquisar</button></a>
			<a href='login.php'>	
				<button class='btn btn-success'>Logar</button></a>";
	}	
?>





