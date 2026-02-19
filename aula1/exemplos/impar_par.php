<?php

    echo "Ímpar - aprovado | par - reprovado <br>";

    echo "<br>";

    for ($i = 1; $i <= 5; $i++){
        if ($i % 2 == 0) {
            echo "Número ". $i .": reprovado <br>";
        } else {
            echo "Número ". $i .": aprovado <br>";
        }
    }

?>