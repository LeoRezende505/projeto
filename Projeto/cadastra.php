<?php
	session_start();
	if(isset($_SESSION['logado'])){

require('upload.php');

require('produtos.php');
$nome = $_POST['nome'];
$descr = nl2br($_POST['descr']);
$valor = $_POST['valor'];

$produto = new produto();

$cadastro = $produto->cadastro($nome,$descr,$valor,$imagem);
}else{
		header('Location: login.php');
	}
?>