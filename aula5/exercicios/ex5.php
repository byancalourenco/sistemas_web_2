<?php

    // pegando o json
    $conteudo = file_get_contents("produtos.json");

    // array
    $dados = json_decode($conteudo, true);

    // nome para remover
    $nome_remover = "PC Gamer";

    foreach ($dados["produtos"] as $i => $produto) {

        if ($produto["nome"] == $nome_remover) {
            unset($dados["produtos"][$i]);
        }
    }

    // organizando
    $dados["produtos"] = array_values($dados["produtos"]);

    // json
    $json = json_encode($dados);

    // salvar json novo
    file_put_contents("produtos.json", $json);


?>