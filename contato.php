<?php

    require "configuracao.php";
    require "utilitario.php"; 

    if ( empty($_POST['chave']) )
        die('NAO PODE!');

    enviaEmail(
        trataString($_POST['email']), 
        trataString('CONTATO DE CLIENTE'), 
        trataString($_POST['texto']), 
        trataString('edsonlb@gmail.com'), 
        trataString($imobiliaria_email));
/*
    enviaEmail(
        trataString($_POST['email']), 
        trataString('CONTATO DE CLIENTE'), 
        trataString($_POST['texto']), 
        trataString($_POST['para']), 
        trataString($imobiliaria_email));
        */

?>