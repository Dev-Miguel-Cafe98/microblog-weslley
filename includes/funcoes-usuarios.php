<?php
require "conecta.php";

// Função para inserir novos usuarios
function inserirUsuario($conexao, $nome, $email, $senha, $tipo)
{

    // Montando o comando SQL para fazer o INSERT dos dados
    $sql = "INSERT INTO usuarios (nome, email, tipo, senha)
    VALUES('$nome', '$email', '$tipo', '$senha')";


    // Executando o comando no banco via PHP
    mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
}

function listaUsuario ( $conexao ){
    $sql = "SELECT nome, email, tipo, id FROM usuarios";

    /* Executando o comando no banco via PHP obtendo o resultado ("bruto) da consulta/comando  */
    $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

    /* Extraindo do resultado "bruto" os dados da consulta em forma de ARRAY ASSOCIATIVO. */
    return mysqli_fetch_all( $resultado , MYSQLI_ASSOC);
}
