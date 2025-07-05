<?php
    //Cálculo de Preço Final com Acréscimo de Taxa.
    $valorProduto = $_POST["valor_produto"];
    $valorTaxa = $_POST["valor_taxa"];

    $final = $valorProduto + ($valorProduto * $valorTaxa / 100);

    echo "<h1>O valor do preço final é de $final reais. O produto inicaialmente é $valorProduto reais e teve uma taxa de acrescimo de $valorTaxa %.</h1>"
?>