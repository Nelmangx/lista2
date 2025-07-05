<?php 
    //Geração de E-mail Institucional.
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = strtolower($nome) . '.' . strtolower($sobrenome) . '@senai.com.br';

    echo "<h1>Seu Email é $email.</h1>";
?>