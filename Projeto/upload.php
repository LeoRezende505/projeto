<?php
date_default_timezone_set('America/Sao_paulo');
$agora = date('d-m-Y-h-i-s');

$arquivo = $_FILES['foto']['tmp_name'];
$foto = $_FILES['foto']['name'];

//pega a extensão
$extensao = pathinfo($foto, PATHINFO_EXTENSION);

//muda o nome
$tmp_nome = md5($foto . $agora);
$imagem = $tmp_nome . "." . $extensao;

//novo destino
$destino = 'img/produtos/'. $imagem;

move_uploaded_file($arquivo, $destino);


?>