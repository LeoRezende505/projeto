<?php
require('produtos.php');
$produto = new produto();

$consulta = $produto->consulta();

while($linha = $consulta->fetch_assoc()){
	$nome = $linha['nome'];
	$descr = $linha['descr'];
	$valor = $linha['valor'];
	$imagem = $linha['imagem'];

	echo "
		<div class='produto'>
			<h2> $nome </h2>";
					
			if($linha['imagem'] == !NULL){
				echo "	
				<img src='img/produtos/$imagem' alt='$nome' class='img' />";
			}else{
				echo "
				<img src='img/sem_foto.png' alt='sem foto disponível' />";
			}
		echo "<p>" . mb_strimwidth($descr, 0, 140, '...') . "</p>
		<p class='valor'>R$ ".number_format($valor,2,',','.')."</p>	 
		</div>";
}

?>