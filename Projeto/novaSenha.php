<?php
	session_start();
	if(isset($_SESSION['logado'])){
$id = $_GET['id'];
$pass = $_POST['senha'];
$pass2 = $_POST['senha2'];


	if($pass != $pass2){
		header('Location: mudaSenha.php?erro=senha&id='.$id);
	}else{
		$salt = md5('user');
		$senha = crypt($pass,$salt);
		$pass = hash('sha512',$senha);
		
		require('usuario.php');
		$usuario = new usuario();
		$novaSenha = $usuario->novaSenha($pass,$id);
	}


}else{
		header('Location: login.php?');
	}
?>