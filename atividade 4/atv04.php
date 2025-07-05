<?php
    //Cálculo de Tempo de Vida em Dias
    $idade = $_POST["idade"];
    $dias = $idade * 365;

    echo "<h1>Você tem $dias de dias vivos.</h1>";
?>