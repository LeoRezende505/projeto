<?php
	session_start();
	if(isset($_SESSION['logado'])){
		
$id = $_GET['id'];		

require('upload.php');
require('produtos.php');

$produto = new produto();

$foto = $produto->mudaFoto($imagem,$id);
}else{
		header('Location: login.php');
	}
?>