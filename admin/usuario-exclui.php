<?php
require "../includes/funcoes-controle-de-acesso.php";
verificarAcesso();

require "../includes/funcoes-usuarios.php"; 


// Capturando o ID passado via URL
$id = $_GET['id'];

// Excluindo o usuário do banco de dados
excluirUsuario($conexao, $id);

// Redirecionando para a página de listagem de usuários
header('Location: usuarios.php');
?>
