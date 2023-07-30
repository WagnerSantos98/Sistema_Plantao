<?php

    session_start();
    session_destroy();
    session_write_close();

    //Encerrando a seção e retornando a tela de login
    header("Location: ../content/login.php");
    exit();
    
?>