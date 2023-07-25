<?php

include_once('conexao.php');
session_start();
error_reporting(0);

 //Cadstro de usuário - tela administrador
 if(isset($_POST['btn_salvar_user'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $funcao = $_POST['funcao'];
    $local_trabalho = $_POST['local_trabalho'];
    $re = $_POST['re'];
    $contato = $_POST['contato'];
    $cpf = $_POST['cpf'];
    $senha_temp = $_POST['senha_temp'];

    $sql_user = "INSERT INTO tb_usuarios(nome, email, funcao, local_trabalho, re, contato, cpf, senha_temp)
                    VALUES('$nome', '$email', '$funcao', '$local_trabalho', '$contato', '$cpf', '$senha_temp');";
                    $sql_users = mysqli_query($con, $sql_user);
}

//Cadastro de função - tela administrador
if(isset($_POST['btn_salvar_funcao'])){
    $nome_funcao = $_POST['nome_funcao'];

    $sql_funcao = "INSERT INTO tb_funcoes(nome_funcao)
                   VALUES('$nome_funcao');";
    $sql_funcoes = mysqli_query($con, $sql_funcao);
}

//Cadastro de local de trabalho - tela administrador
if(isset($_POST['btn_salvar_local'])){
    $nome_local = $_POST['nome_local'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $numero = $_POST['numero'];

    $sql_local = "INSERT INTO tb_locais(nome_local, cep, rua, bairro, cidade, uf, numero)
                    VALUES('$nome_local', '$cep', '$rua', '$bairro', '$cidade', '$uf', '$numero');";
                    $sql_locais = mysqli_query($con, $sql_local);
}




?>