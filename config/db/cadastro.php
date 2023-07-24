<?php

include_once('conexao.php');
session_start();
error_reporting(0);

 //Cadstro de usuário - tela administrador
 if(isset($_POST['btn_salvar_usuario'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $funcao = $_POST['funcao'];
    $local_trabalho = $_POST['local_trabalho'];
    $identificador = $_POST['identificador'];
    $contato = $_POST['contato'];
    $cpf = $_POST['cpf'];
    $senha_temp = md5($_POST['senha_temp']);
  
  
    $sql_usuario = "INSERT INTO tb_usuarios(nome, email, funcao, local_trabalho, identificador, contato, cpf, senha_temp)
                    VALUES('$nome', '$email', '$funcao', '$local_trabalho', '$identificador', '$contato', '$cpf', '$senha_temp');";
                    $sql_usuarios = mysqli_query($con, $sql_usuario);
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

$message = "Mensagem de erro ou depuração que você deseja registrar.";
error_log($message, 3, "/caminho/do/arquivo/de/log/meu_log.txt");


?>