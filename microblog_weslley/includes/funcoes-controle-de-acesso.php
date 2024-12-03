<?php
// Funcoes-controle-de-acesso.php

/* Sessoes (SESSIONS) no PHP
Funcionalidade usada para o controle de acesso à determinadas
páginas e/ou recursos do site.
Exemplos: área administrativa, painel de controle, área de cliente/aluno
Nestas áreas o acesso se da atraves de alguma forma de autenticaçao.Ex.login e senha, biometria, facial,2-fatores, token.*/

/*Verificaçao de sessao no PHP */

if (!isset($_SESSION)) {
    // Se não tiver, entao iniciamos uma sessão
    session_start();
}

/*Proteger o acesso as paginas da área administrativa */

function verificarAcesso()
{
    /*Se NAO EXISTIR uma variavel de sessao chamada "id",
    entao significa que o usuário não está logado. */
    if (!isset($_SESSION['id'])) {
        //Portanto, destruimos qualquer resquicio de sessão
        session_destroy();
        //Fazemos o usuário ir pra a pagina de login.php
        header("location:../login.php?acesso_negado");
        //E paramos completamente a execuçao do script
        die();
    }
}

/*Funçao que sera usada pelo formulário login.php */

function login($id, $nome, $tipo)
{
    //Criar variaveis de sessao
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['tipo'] = $tipo;
}
/*Funçao que sera usada quando clicar no link sair */

function logout()
{
    session_destroy();
    header("location:../login.php?saiu");
    die();
}

/* Verificar o nivel/privelegio de acesso do ususario */

function verificarNivel()
{
    /* Se o tipo de usuário logado for DIFERENTE de admin */

    if ($_SESSION['tipo'] !== 'admin') {
        /* Entao, redirecione para a página nao-autorizado.php */
        header("location:nao-autorizado.php");
        die();
    }
}
