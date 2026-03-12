<?php

    echo "<table border='1'>";
        for ($linha = 1; $linha <= 5; $linha++) { 
            echo "<tr>";
            for ($coluna = 1; $coluna <= 5; $coluna++) { 
                echo "<td>($linha, $coluna)</td>";
            }
            echo "</tr>";
        }
    echo "</table>";

    echo "<br>";
    echo "<hr>";
    echo "<br>";


    echo "<table border='1'>";
            for ($linha = 1; $linha <= 10; $linha++) { 
            echo "<tr>";
            for ($coluna = 1; $coluna <= 10; $coluna++) { 
                $resultado = $linha * $coluna;
                echo "<td> $linha X $coluna = $resultado</td>";
            }
            echo "</tr>";
        }
    echo "</table>"


?>