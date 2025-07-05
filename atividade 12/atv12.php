<?php
    //Formatar Data Completa.
    $dia = $_POST["dia"]; 
    $mes = $_POST["mes"];
    $ano = $_POST["ano"];
    $data = $dia. "/". $mes. "/". $ano;
    echo "<h1>$data.</h1>";
?>