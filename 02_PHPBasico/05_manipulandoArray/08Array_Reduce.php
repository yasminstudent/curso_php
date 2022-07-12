<?php
//--------- EXEMPLO 1 ---------
$numeros = [1, 2, 3, 4, 5];

function somar($subtotal, $item) {
    $subtotal += $item;
    return $subtotal;
    //na primeira vez que essa função for executada, o $subtotal valerá 0
    //nas vezes seguintes o $subtotal valerá o que foi retornado nessa função
}

$total = array_reduce($numeros, 'somar');
//o array_reduce irá percorrer o array $numeros e para cada item desse array
//ele executará a função passada como segundo parâmetro
//o array_reduce tem um terceiro parâmetro (opcional) que indicaria o valor 
//inicial do $subtotal, quando ele não é passado na função (array_reduce)
//por padrão ele vale zero

echo $total . "<br>";

//--------- EXEMPLO 2 ---------
$pessoas = [
    ['nome' => 'Walter White', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Jesse Pinkman', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'Jane Margolis', 'sexo' => 'F', 'nota' => 10],
    ['nome' => 'Hank Schrader', 'sexo' => 'M', 'nota' => 8],
    ['nome' => 'Skyler White', 'sexo' => 'F', 'nota' => 9],
    ['nome' => 'Marie Schrader', 'sexo' => 'F', 'nota' => 9],
];

//Total de homens
function contarHomens($subtotal, $item) {
    if ($item['sexo'] === 'M') {
        $subtotal++;
    }
    return $subtotal;
}

$totalHomens = array_reduce($pessoas, 'contarHomens');

//Soma das notas dos homens
function somaNotaHomens($subtotal, $item){
    if ($item['sexo'] === 'M') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
}

$totalNotaHomens = array_reduce($pessoas, 'somaNotaHomens');

//Média das notas dos homens
$mediaNotaHomens = $totalNotaHomens / $totalHomens;

//exibição
echo "Total de homens: ".$totalHomens."<br>";
echo "Soma das notas dos homens: ".$totalNotaHomens."<br>";
echo "Média das notas dos homens: ".$mediaNotaHomens."<br>";

?>