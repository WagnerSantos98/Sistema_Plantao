<?php
  include_once('../db/conexao.php');
  session_start();

  //Retorno de informações para Select campo Função e Local de Trabalho
  $sql_funcao_return = "SELECT idFuncao, nome_funcao FROM tb_funcoes";
  $result_funcao = mysqli_query($con, $sql_funcao_return);

  $sql_trabalho_return = "SELECT idLocal, nome_local FROM tb_locais";
  $result_trabalho = mysqli_query($con, $sql_trabalho_return);



?>