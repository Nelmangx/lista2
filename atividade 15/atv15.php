<?php 
    //Apresentação de um Produto com Formatação de Preço.
    $preco = $_POST["preco"];
    $produto = $_POST["produto"];
    $PRECO = number_format($preco, 2, ',', '.');

    echo "<h1>Produto: $produto — Preço: $PRECO R$ .</h1>";
?>