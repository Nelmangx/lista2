<?php
    //Cálculo do Perímetro de um Retângulo.
    $largura = $_GET["largura"];
    $altura = $_GET["altura"];
    $perimetro = 2 * ($largura + $altura);

    echo "<h1>O retângulo tem a largura: $largura, e a altura: $altura.</h1>";
?>