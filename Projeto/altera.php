<?php
$id = $_GET['id'];
require('produtos.php');
$nome = $_POST['nome'];
$descr = nl2br($_POST['descr']);
$valor = $_POST['valor'];

$produto = new produto();

$altera = $produto->editar($nome,$descr,$valor,$id);

?>