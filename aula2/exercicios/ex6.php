<?php

    // declarando a variável usada para a soma
    $soma = 0;

    // somando 
    for ($i=1; $i <= 50 ; $i++) { 
        $soma = $soma + $i;
        echo $soma;
        echo "<br>";
    }

    echo "<hr>";

    // resultado da soma
    echo "soma: $soma"

?>