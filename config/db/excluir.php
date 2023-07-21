<?php
include_once('./conexao.php');
session_start();

//Exclusão de usuário
$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id_usuario)){
    $sql_excluir_usuario = "DELETE FROM tb_usuarios WHERE id_usuario = '$id_usuario'";
    $sql_excluir_usuario = mysqli_query($con, $sql_excluir_usuario);
    if(mysqli_affected_rows($con)){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário excluído com sucesso.</p>";
        header("Location: ../content/administrador.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao excluir usuário.</p>";
        header("Location: ../content/administrador.php");
    }
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário.</p>";
    header("Location: ../content/administrador.php");
}
?>