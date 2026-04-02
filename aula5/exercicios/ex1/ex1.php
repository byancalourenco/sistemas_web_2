<?php

    // array 
    $produtos = ['produtos' => [
        [
            'nome' => 'esnopi',
            'preco' => 30,
            'quantidade'=> 45
        ],
        [
            'nome'=> 'boneco do homem aranha',
            'preco'=> 56,
            'quantidade'=> 87
        ],
        [
            'nome'=> 'my melody',
            'preco'=> 67,
            'quantidade'=> 468
        ]
    ]];

    // array --- json
    $json = json_encode($produtos);

    // outro arquivos
    file_put_contents("produtos.json", $json);

    echo $json;
    
?>