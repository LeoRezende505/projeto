<?php
	session_start();
	if(isset($_SESSION['logado'])){

	$id = $_GET['id'];
	require_once('produtos.php');
	$produto = new produto();
	$apagar = $produto->apagar($id);
	
	}else{
		header('Location: login.php');
	}
?>