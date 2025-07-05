<?php 
    //Divisão do Valor de Conta entre Amigos.
    $valorConta = $_POST["valor"];
    $amigos = $_POST["amigos"];
    $valorPesso = $valorConta / $amigos;
    
    echo "<h1>O valor da conta é $valorConta. Ficou $valorPesso para cada.</h1>";

?>