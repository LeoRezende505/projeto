<?php
	session_start();
	if(isset($_SESSION['logado'])){

	$user = $_POST['usuario'];
	$mail = $_POST['email'];
	$pass = $_POST['senha'];
	$pass2 = $_POST['senha2'];


	if($pass != $pass2){
		header('Location: criaUser.php?erro=senha');
	}else{
		//$salt = md5('user');
		//$senha = crypt($pass,$salt);
		//$pass = hash('sha512',$senha);
		
		require('usuario.php');
		require('upload2.php');
		$usuario = new usuario();
		$novoUser = $usuario->novoUser($user,$mail,$pass,true);
	}


}else{
		header('Location: login.php');
	}
?>