<?php
    // setando a data no formato brasileiro
    date_default_timezone_set("America/Bahia");

    echo "Hoje é dia " . date('d/m/y') . '<br>';
    // Se alterarmos o Y para y o formato do ano de 2021 para 21
    echo "<br>";
    
    echo "Agora são " . date('H:i:s') . '<br>';

    echo "<br>";

    echo "Formatando as horas, no formato AM/PM: " . date("H:i:sa") . "<br>";

    echo "<br>";

    echo "Hoje é dia " . date("d/m/y") . " " . date("l") . "<br>";

    echo "<br>";

    echo "Esse mês é: " . date("M");

    $date1 = mktime(06, 00, 00, 06, 26, 2021);

    echo "<br>";

    $sabado =  date("d", $date1);

    echo "<br>";

    $hoje = date("d");

    echo "Faltam " . $sabado - $hoje . " para o sábado !!! :)";



?>