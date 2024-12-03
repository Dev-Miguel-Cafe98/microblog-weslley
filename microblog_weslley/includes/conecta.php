<?php
// Parametros de acesso ao servidor
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "microblog_adriano";

// Acessar a função de conexão ao servidor de BD

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

//Definindo o charset UTF8 para conexao
mysqli_set_charset($conexao, "utf8");

//Verificando a conexao

/*if($conexao === false){
    die("Erro: ".mysqli_connect_error());
}else {
    echo "beleza, segue o jogo...";
}*/

?>