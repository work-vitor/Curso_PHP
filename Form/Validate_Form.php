<?php

    if(isset($_POST['btn_enviar'])){


        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $peso = $_POST['peso'];

        //ARRAY PARA ARMAZENAR ERROS
        $erros = [];

        //Sanitizar
        //Filtros contra a inserção de codigos maliciosos atraves do formulario
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        $peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        if (!$email = filter_var(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            $erros[] = "E-amil Inválido";
        }

        if (!$idade = filter_var(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
            $erros[] = "Idade tem que ser um número inteiro";
        }

        if (!$peso = filter_var(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
            $erros[] = "Peso tem que ser um número real com casas decimais.";
        }

        if(!empty($erros)){
            foreach ($erros as $erro) {
                echo "<li>$erro</li>";
            }
            echo "Insira os dados corretamente";
            echo "<hr>";
        }else{
            echo "<h4> Todos os dados estão corretos:</h4>";
            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "Idade: $idade <br>";
            echo "Peso: $peso <br>";
            echo "<hr>";
        }

        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Arrays/Exercicio/css/style.css">
    <title>Validação de Formulários</title>
</head>
<body>
    <form action="Validate_Form.php" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" autofocus>
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" />
        </div>
        <div>
            <label>Idade </label>
            <input type="number" min="1" max="120" step="1" name="idade">
        </div>
        <div>
            <label for="msg">Peso:</label>
            <input type="number" min="2.4" max="200.0" step="0.1" name="peso">
        </div>
        <div class="button">
            <button type="submit" name="btn_enviar">Enviar</button>
        </div>
    </form>
</body>
</html>