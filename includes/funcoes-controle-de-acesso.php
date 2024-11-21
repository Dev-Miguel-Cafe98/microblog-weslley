<?php
// funcoes-controle-de-acesso.php

/* Sessões (SESSION) no PHP  Funcionalidade  usada para o controle de acesso à determinadas páginas e/ou recurso do site

Exemplo: área administrativa , painel de controle, área de cliente/aluno etc.

Nesta áreas o acesso se dá através de alguma forma de autenticação. 
Exemplo: login/senha, biometria, facial , 2-fatores etc ..

*/


/*  Verificando se NÃO EXISTE uma sessão em andamento */
if (!isset($_SESSION)) {
    // se não tiver, então iniciamos uma sessão
    session_start();
}

/* Proteger o acesso às páginas da área administrativa */
function verificarAcesso()
{
    /* se NÃO EXISTIR uma variável de sessão chamada 'id' então significa que o usuário não está logado */
    if (!isset($_SESSION['id'])) {
        /* Portanto, destruímos qualquer resquício de sessão */
        session_destroy();

        /* Fazemos o usuário ir para página de login.php */
        header("location:../login.php?acesso_negado");

        /* E paramos completamente a execução do script */
        die();
    }
}
/* Função que será usada pelo formulário de login.php */
function login($id, $nome, $tipo){
    // Criando a variável de sessão
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['tipo'] = $tipo;
}

/* Função que será usada quando clicar no link Sair */
function logout(){
    session_destroy();
    header("location:../login.php?saiu");
    die();
}
