<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <?php
    
        // pseudovariaveis ou super globais: get, post, request, session, server

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];

        // calculando ano de nascimento
        $ano_atual = date('Y');   
        $ano_nascimento = $ano_atual - $idade;

        // maior ou menor de idade 
        if ($idade >= 18) {
            $maior_menor = "<p style='color: red;'>Você é maior de idade!</p>";
        } else{
            $maior_menor = "<p style='color: blue;'>Você é menor de idade!</p>";
        }

    ?>

    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>A idade é: <?php echo $idade; ?></p>
    <p>O seu ano de nascimento é: <?php echo $ano_nascimento; ?></p>
    <p><?php echo $maior_menor; ?></p>

    <?php
    
        // lista dinâmica

        echo "<p>Lista de clientes</p>";
        echo "<ul>";
            for ($i=1; $i <= 3; $i++) { 
                echo "<li>Cliente $i</li>";
            }
        echo "</ul>";
    ?>

</body>
</html>