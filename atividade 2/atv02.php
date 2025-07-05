<?php 
    // Conversor de Moeda

    $valorReais = $_POST["valor_real"];
    $cotacao = $_POST["cotacao_dolar"];

    $valorDolar = $valorReais / $cotacao;
    echo "<h1>A conversão foi de R$ $valorReais para $valorDolar em Dólar, com  a cotação de $cotacao</h1>";
?>