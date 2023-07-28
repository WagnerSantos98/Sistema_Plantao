<?php

    session_start();
    session_destroy();

    //Encerrando a seção e retornando a tela de login
    header("Location: ../content/login.php");
?>