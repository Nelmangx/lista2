<?php
    //Concatenação e Formatação de Endereço Completo.
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $quadra = $_POST["quadra"];

    echo "<h1> Seu endereço é CIDADE:$cidade, BAIRRO:$bairro, RUA:$rua, NUMERO:$numero, QUADRA:$quadra."
?>