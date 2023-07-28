<?php

include_once('../db/conexao.php');
session_start();
error_reporting(0);

//Cadstro de usuário - tela administrador
if(isset($_POST['btn_salvar_usuario'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $funcao_id = $_POST['funcao']; // Aqui está o ID selecionado na select da função
    $local_trabalho_id = $_POST['local_trabalho']; // Aqui está o ID selecionado na select do local de trabalho
    $re = $_POST['re'];
    $contato = $_POST['contato'];
    $cpf = $_POST['cpf'];
    $senha_temp = $_POST['senha_temp'];

    // Monta o SQL de inserção
    $sql_user = "INSERT INTO tb_usuarios (nome, email, funcao, local_trabalho, re, contato, cpf, senha_temp, idFuncao, idLocal)
                VALUES ('$nome', '$email', (SELECT nome_funcao FROM tb_funcoes WHERE idFuncao = $funcao_id), 
                        (SELECT nome_local FROM tb_locais WHERE idLocal = $local_trabalho_id), 
                        '$re', '$contato', '$cpf', '$senha_temp', $funcao_id, $local_trabalho_id);";

    // Executa a inserção
    if (mysqli_query($con, $sql_user)) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($con);
    }

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