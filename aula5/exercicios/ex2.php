<?php

    // pegando o json 
    $conteudo = file_get_contents("usuarios.json");

    // array
    $dados = json_decode($conteudo, true);

    // exibindo nome e email
    foreach($dados["usuarios"] as $usuario) {
        echo "Nome: " . $usuario["nome"] . "<br>";
        echo "Email: " . $usuario["email"] . "<br><br>";
    }

?>