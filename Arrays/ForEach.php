<?php

$arr = [1, 2, 3, 4];

echo "<h1>Percorrendo Array com ForEach</h1>";
foreach ($arr as $valor){
    echo $valor."<br>";
}

echo "<h1>Exibindo os elementos e o indice com ForEach</h1>";

foreach($arr as $index => $valor){
    echo "Indice [$index] = $valor"."<br>";
}

$bebidas = [
    "sucos" => "Laranja",
    "refri" => "Coca"
];

echo "<h1>Exibindo os elementos e o indice com ForEach</h1>";

foreach($bebidas as $index => $valor){
    echo "Indice {$index} = {$valor}"."<br>";
}