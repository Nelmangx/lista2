<?php
    $valorHora = $_POST["valor_hora"];
    $horasSemanais = $_POST["horas"];

    $salarioBruto = $valorHora * $horasSemanais * 4.5;

    echo "<h1>O seu salário bruto é $salarioBruto.</h1>";

?>