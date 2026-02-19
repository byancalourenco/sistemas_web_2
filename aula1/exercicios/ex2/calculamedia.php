<?php

    // notas
    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 9;

    $media = ($nota1 + $nota2 + $nota3)/3;

    if ($media >= 7){
        echo "Média: ". $media . " - Aprovado!";
    } else {
        echo "Média: ". $media . " - Reprovado!";
    }

?>