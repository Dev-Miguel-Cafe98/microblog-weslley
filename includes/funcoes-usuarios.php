<?php
require "conecta.php";

// Função para inserir novos usuarios
function inserirUsuario($conexao, $nome, $email, $senha, $tipo)
{

    // Montando o comando SQL para fazer o INSERT dos dados
    $sql = "INSERT INTO usuarios (nome, email, tipo, senha)
    VALUES('$nome', '$email', '$tipo', '$senha')";


    // Executando o comando no banco via PHP
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

function listaUsuario($conexao)
{
    $sql = "SELECT nome, email, tipo, id FROM usuarios";

    /* Executando o comando no banco via PHP obtendo o resultado ("bruto) da consulta/comando  */
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    /* Extraindo do resultado "bruto" os dados da consulta em forma de ARRAY ASSOCIATIVO. */
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function ListarUmUsuario($conexao, $id)
{
    // mysqli_fetch_all seleciona todos os dados
    // mysqli_fetch_assoc seleciona uma pessoa

    // Comando SELECT para carregar os dados de UMA PESSOA específica através do ID
    $sql = "SELECT * FROM usuarios WHERE id = $id";

    // Execução e verificação do comando SQL
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    // Extração dos dados de UMA PESSOA como ARRAY ASSOCIATIVO
    return mysqli_fetch_assoc($resultado);
}

function atualizarUsuario($conexao, $id, $nome, $email, $senha, $tipo)
{
    $sql = "UPDATE usuarios SET
    nome = '$nome',
    email = '$email', 
    senha = '$senha', 
    tipo = '$tipo' 
    WHERE id = $id"; // NÃO ESQUEÇA NUMCA ESSA BAGAÇA!!


    // COPIE E COLE AQUI O MYSQLI_QUERY DA FUNÇÃO inserirUsuario
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

function excluirUsuario($conexao, $id)
{
    $sql = "DELETE FROM usuarios WHERE id = $id";
    
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}
