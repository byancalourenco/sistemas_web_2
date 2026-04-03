<?php

    // array 
    $produtos = ['produtos' => [
        [
            'nome' => 'Celular',
            'preco' => 4.945,
            'quantidade'=> 45
        ],
        [
            'nome'=> 'TV',
            'preco'=> 7.567,
            'quantidade'=> 87
        ],
        [
            'nome'=> 'Tablet',
            'preco'=> 1.278,
            'quantidade'=> 468
        ]
    ]];

    // array --- json
    $json = json_encode($produtos);

    // outro arquivos
    file_put_contents("produtos.json", $json);

?>