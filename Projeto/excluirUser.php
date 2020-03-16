<?php
	session_start();
	if(isset($_SESSION['logado'])){

	$id = $_GET['id'];
	require_once('usuario.php');
	$usuario = new usuario();
	$excluir = $usuario->excluir($id);
	
	}else{
		header('Location: login.php');
	}
?>