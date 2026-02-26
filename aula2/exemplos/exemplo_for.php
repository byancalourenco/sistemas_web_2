<?php

    // contador
    for ($i = 01; $i<= 5; $i++){
        echo $i;
        echo "<br>";
    }

    echo "<hr>";

    // array
    $nomes = ['fulano','ciclano','beltrano','byanca'];
    echo $nomes[0];
    echo "<br>";
    echo $nomes[1];
    echo "<br>";
    echo $nomes[2];


    echo "<hr>";

    // juntando: for e array
    for ($i = 0; $i <= 2; $i++){
        echo $nomes[$i];
        echo "<br>";
    }

    echo "<hr>";

    // quantos itens tenho no array 
    $qtde = count($nomes);
    echo $qtde;

    echo "<hr>";

    // foreach
    foreach ($nomes as $indice => $value) {
       echo "$indice --> $nomes[$indice]" ;
       echo "<br>";
    }

    echo "<hr>";

?>