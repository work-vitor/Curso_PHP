<?php



$dados = [
    "nome" => $_POST['nome'],
    "email" => $_POST['email'],
    "msg" => $_POST['msg']
];

print_r($dados);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<pre>
    <h1>Nome: </h1>
    <p> <?php echo $dados["nome"]?></p>
    

    <h1>Email: </h1>
    <p> <?php echo $dados["email"]?></p>
    

    <h1>Texto: </h1>
    <p> <?php echo $dados["msg"]?></p>

    <h1>Quantos elementos foram enviados pelo formulário: <?php echo count($dados)?></h1>

    <?php echo "<h1>Exibindo os elementos e o indice com ForEach</h1>";

    foreach($dados as $index => $valor){
        echo "Indice [$index] = $valor"."<br>";
    }

    ?>
    
</pre>
</body>
</html>