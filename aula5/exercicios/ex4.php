<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <!-- forms -->
   <form action="" method="GET">
        <label for="">Digite um email: </label>
        <input type="text" name="email" require>
        <input type="submit">
   </form> 
   <br>

</body>
</html>

<?php

    // guardar o usuario
    $usuario_encontrado = null;

    // só executa se o email foi enviado
    if (isset($_GET["email"])) {

        // guardar o email
        $emailBusca = $_GET["email"];

        // json
        $conteudo = file_get_contents("usuarios.json");

        // array
        $dados = json_decode($conteudo, true);

        // percorrendo
        foreach ($dados["usuarios"] as $usuario) {
            if ($usuario["email"] == $emailBusca) {
                $usuarioEncontrado = $usuario;
                break;
            }
        }

        // exibir resultado
        if ($usuarioEncontrado) {
            echo "Usuário encontrado:<br><br>";
            echo "Nome: " . $usuarioEncontrado["nome"] . "<br>";
            echo "Email: " . $usuarioEncontrado["email"] . "<br>";
            echo "Id: " . $usuarioEncontrado["id"];
        } else {
            echo "Usuário não encontrado.";
        }
    }

?>