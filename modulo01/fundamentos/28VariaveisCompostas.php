<?php
//Aprendendo sobre arrays

$arraySimples = ["Yasmin", 20, "PHP", 7.4];
echo $arraySimples[0]; //Yasmin

echo "<br>";

$pessoa = array(
    "nome" => "Yasmin",
    "idade" => 19,
    "sexo" => "feminino",
    "programadora?" => true
);

$pessoa["idade"] = 20;
echo $pessoa["idade"]; //20

echo "<br>";

//Um array pode armazenar outros arrays
$produto = [
    0 => [
        "nome" => "notebook",
        "marca" => "acer",
        "modelo" => "nitro 5",
        "estoque" => 1
    ],
    1 => [
        "nome" => "monitor",
        "marca" => "aoc",
        "modelo" => "sla",
        "estoque" => 1
    ]
];

$produto[] = [
    "nome" => "smartphone",
    "marca" => "xiaomi",
    "modelo" => "poco x3",
    "estoque" => 1
];

echo $produto[2]["marca"]; //xiaomi

?>