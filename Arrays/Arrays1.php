<?php


$alunos = array("João", "Vitor", "Pedro");
$cursos = ["PHP", "Java", "Ruby", "Mysql"];
$valores = [10, 1,75, "122", 2.2];

$bebidas = [
    "sucos" => ["Laranja", "Uva"],
    "refri" => ["Coca", "Fanta"]
];

$categorias = [];
$categorias[0] = "Programação";
$categorias[1] = "Redes";
$categorias[2] = "Suporte";

echo "<pre>";
    echo "<h1>Criação e exibição de Arrays</h1>";
    var_dump($alunos);//Esta função mostrará uma representação estruturada sobre uma ou mais expressões, incluindo o tipo e o valor. Arrays e objetos são explorados recursivamente com valores identados na estrutura mostrada.

    echo "<br>";
    echo "<hr>";

    print_r($bebidas);//exibe informação sobre uma variável em uma maneira que é legível para humanos.

    echo "<br>";
    echo "<hr>";

    var_dump($bebidas);

    echo "<br>";
    echo "<hr>";

    echo "Array Bebidas: ".$bebidas["sucos"][1];
    echo "<br>";
    echo "Array Bebidas: ".$bebidas["refri"][0];


echo "</pre>";


echo "<br>";
echo "<hr>";

//Funções para Manipular Arrays

echo "<pre>";

    echo "<h1> Funções para manipulação de Arrays</h1>";

    echo "<h2>Adicionar no final com array_push</h2>";
    array_push($alunos, "Jose", "Maria");
    print_r($alunos);

    echo "<h2>Adicionar no inicio com array_unshift</h2>";
    array_unshift($alunos, "Nick", "Juliana");
    print_r($alunos);
    array_unshift($bebidas["sucos"], "Morango");
    print_r($bebidas["sucos"]);

    echo "<h2>Remover no final com array_pop</h2>";
    array_pop($bebidas["refri"]);
    print_r($bebidas["refri"]);

    echo "<h2>Remover no inicio com array_shift</h2>";
    array_shift($categorias);
    print_r($categorias);

echo "</pre>";

echo "<pre>";

    echo "<h1>Contar e Ordenar Arrays</h1>";

    echo "Quantidade de elementos dentro do array alunos: ".count($alunos);

    echo "<br>";
    rsort($valores);
    echo "Ordenar em ordem decrescente: ";
    print_r($valores);
    
    echo "<br>";
    sort($valores);
    echo "Ordenar em ordem crescente: ";
    print_r($valores);

echo "</pre>";