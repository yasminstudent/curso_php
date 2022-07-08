<?php

function br(){
    echo "<br>";
}

// ----- COUNT -----
$exemplo = ["item1", "item2", "item3", "item4", "item5"];
echo count($exemplo); //retorna a quantidade de itens que o array possui
br();


// ----- ARRAY_DIFF -----
$alunos = ["josé", "maria", "pedro", "paula", "joão", "francisca"];
$aprovados = ["josé", "paula", "joão"];
//retorna os itens do primeiro array que não estão no segundo array
print_r(array_diff($alunos, $aprovados)); //maria, pedro e francisca
br();


// ----- ARRAY_FILTER -----
$numeros = [10, 20, 30, 40, 50, 15];
//filtra um array através da função callback
$menorQue30 = array_filter($numeros, function($item){
    if($item < 30) return true;
    
    return false;
});
print_r($menorQue30);
br();

// ----- ARRAY_MAP -----
//mapeia os itens de um array
$dobrados = array_map(function($item){
    return $item * 2;
}, $numeros);
print_r($dobrados);
?>