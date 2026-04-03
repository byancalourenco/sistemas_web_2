<?php

    // pegando o json 
    $conteudo = file_get_contents("produtos.json");

    // array
    $dados = json_decode($conteudo, true);

    // criar um novo produto
    $novo_produto = [
        "nome" => "PC Gamer",
        "preco" => 6.890,
        "quantidade" => 34
    ];

    // adicionando ao array
    $dados["produtos"][] = $novo_produto;

    // converter de volta ao json
    $json_novo = json_encode($dados);

    // salvar no arquivo
    file_put_contents("produtos.json", $json_novo);

?>