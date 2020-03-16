<?php
require('usuario.php');

$usuario = new usuario();

$sql = " 
		INSERT INTO usuarios(usuario,email,senha)
		VALUES('admin','admin@admin.com','12345')
";
$result = $usuario->conn->query($sql) 
or die("Falha ao inserir dados");

	if($result == true){
		echo "cadastrado com sucesso!";
		return $result;
	}else{
		die("Falha no cadastro!");
	}


?>