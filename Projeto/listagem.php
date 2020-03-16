<?php
	ini_set('error_reporting', E_ALL & ~E_NOTICE);
	session_start();
	if(isset($_SESSION['logado'])){

require('produtos.php');
$produto = new produto();

$consulta = $produto->consulta();
		

while($linha = $consulta->fetch_assoc()){
	$id = $linha['idProduto'];
	$nome = $linha['nome'];
	$descr = $linha['descr'];
	$valor = $linha['valor'];
	$data = $linha['dataCadastro'];
	$data = date('d/m/Y - H:i:s',strtotime($data));

	echo "
		<tr>
			<td> $nome </td>
			<td>" . mb_strimwidth($descr, 0, 70, '...') 
			. "</td>
			<td>R$ ".number_format($valor,2,',','.')."</td>
			<td> $data </td>";
			if($linha['imagem'] == !NULL){
				echo "<td><span class='ok'>COM FOTO</span>
				<a href='atualizaImagem.php?id=$id'><br/>
				<span class='upload'>UPLOAD</span></a></td>";
			}else{
				echo "<td><span class='ok'>SEM FOTO</span>
				<br/><a href='atualizaImagem.php?id=$id'>
					 <span class='upload'>UPLOAD</span></a></td>";	
			}
			echo "
			<td class='icon'><a href='editar.php?id=$id'><img src='img/edit.png' alt='editar'></a></td>
			<td class='icon'>
			<a onclick='return confirm(\"Tem certeza?\");'
			href='excluir.php?id=$id'>
			<img src='img/delete.png' alt='excluir'></a></td>
		</tr>";
}
	}else{
		header('Location: login.php');
	}
?>



