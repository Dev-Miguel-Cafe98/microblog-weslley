<?php
require "../includes/funcoes-controle-de-acesso.php";
verificarAcesso();
verificarNivel();


require "../includes/funcoes-usuarios.php";


//Pegando o id passado via URL
$id = $_GET['id'];

//Chamando a funçao de excluir passando o id do usuário
excluirUsuario($conexao, $id);

//Redorecionando para a pagina com todos os usuarios
header("location:usuarios.php");
