<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "microblog_weslley";
 
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
 
// Definindo o charset UTF8 para a conexão
mysqli_set_charset($conexao, "utf8");
 
// Checando a conexão
// if ($conexao === false) {
//     die("Erro: " .mysqli_connect_error());
// } else {
// echo "Connected successfully my champs";
// }
 
?>