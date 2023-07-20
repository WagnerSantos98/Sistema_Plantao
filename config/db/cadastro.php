<?php

include_once('./conexao.php');
session_start();
error_reporting(0);

//Cadstro de usuário
if(isset($_POST['btn-cadastrar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $funcao = $_POST['funcao'];
    $nome_local = $_POST['nome_local'];
    $identificador = $_POST['identificador'];
    $contato = $_POST['contato'];
    $cpf = $_POST['cpf'];

    $sql_usuario = "INSERT INTO tb_usuarios(nome, enail, funcao, nome_local, identificador, contato, cpf)
                    VALUES('$nome', '$email', '$funcao', '$nome_local', '$identificador', '$contato', '$cpf');";
                    $sql_usuarios = mysqli_query($con, $sql_usuario);
}

//


?>