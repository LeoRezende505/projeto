<?php
	session_start();
	if(isset($_SESSION['logado'])){
		
$id = $_GET['id'];		

require('upload2.php');
require('usuario.php');

$usuario = new usuario();

$avatar = $usuario->mudarAvatar($avatar,$id);
}else{
		header('Location: login.php');
	}
?>