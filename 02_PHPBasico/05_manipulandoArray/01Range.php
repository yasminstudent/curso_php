<?php

//range serve para gerar certos arrays sequênciais...

//gera um array com itens de 1 a 20
$array = range(1, 20); //[1, 2, 3, 4, 5...20]

//gera um array com itens de 1 a 20, pulando de 2 em 2
$array = range(1, 20, 2); //[1, 3, 5, 7, 9...19]

//gera um array com itens de 50 a 20
$array = range(50, 20); //[50, 49, 48, 47, 46...20]

//gera um array com itens de a a z
$array = range("a", "z"); //['a', 'b', 'c', 'd', 'e'...'z']

//gera um array com itens de y a d
$array = range("y", "d"); //['y', 'x', 'w', 'v', 'u'...'d']

foreach ($array as $item) {
    echo $item . "<br/>";
}

?>