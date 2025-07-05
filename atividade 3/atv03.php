<?php
    //Cálculo do IMC
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $imc = $peso / ($altura * $altura);
    echo "<h1>Seu IMC é de $imc, sua altura é de $altura e seu peso é de $peso. </h1>"
?>