<?php 
    //Data de Nascimento e Ano Atual.
    $anoNascimento = $_POST["idade"];
    $idade = date('Y') - $anoNascimento;

    echo "<h1>Você tem $idade e nasceu em $anoNascimento.</h1>";

?>