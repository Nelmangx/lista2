<?php 
    //Cálculo de Volume de uma Caixa Retangular.

    $largura = $_POST["largura"];
    $altura = $_POST["altura"];
    $comprimento = $_POST["comprimento"];
    $volume = $comprimento * $largura * $altura;

    echo "<h1>A sua caixa retângular tem a largura de $largura cm, altura de $altura cm, o comprimento de $comprimento cm e o volume de $volume cm.</h1>";
?>