<?php

include_once('./conexao.php');
session_start();
error_reporting(0);

//Cadstro de usuário - tela administrar
if(isset($_POST['btn-cadastrar-usuario'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $funcao = $_POST['funcao'];
    $nome_local = $_POST['nome_local'];
    $identificador = $_POST['identificador'];
    $contato = $_POST['contato'];
    $cpf = $_POST['cpf'];

    $sql_usuario = "INSERT INTO tb_usuarios(nome, email, funcao, nome_local, identificador, contato, cpf)
                    VALUES('$nome', '$email', '$funcao', '$nome_local', '$identificador', '$contato', '$cpf');";
                    $sql_usuarios = mysqli_query($con, $sql_usuario);
}

//Cadastro de função
if(isset($_POST['btn-cadastrar-funcao'])){
    $nome_funcao = $_POST['nome_funcao'];

    $sql_funcao = "INSERT INTO tb_funcoes(nome_funcao)
                   VALUES('$nome_funcao');";
    $sql_funcoes = mysqli_query($con, $sql_funcao);
}

//Cadastro de local de trabalho
if(isset($_POST['btn-cadastrar-local'])){
    $nome_local = $_POST['nome_local'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $numero = $_POST['numero'];

    $sql_local = "INSERT INTO tb_locais(nome_local, cep, rua, bairro, cidade, uf, numero)
                    VALUES('$nome_local', '$cep', '$rua', '$cidade', '$uf', '$uf', '$numero');";
                    $sql_locais = mysqli_query($con, $sql_local);
}


?>