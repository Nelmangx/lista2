<?php 
    //Cálculo de Reajuste Salarial
    $salarioAtual = $_POST["salario_atual"];
    $porcentagem = $_POST["percentual"];

    $novoSalario = $salarioAtual +($salarioAtual * $porcentagem / 100);

    echo "<h1>Seu novo salário é de $novoSalario.</h1>";

?>