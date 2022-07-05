<?php
//Uma função recursiva é uma função que chama ela mesma
function dividir($num){
    $metade = $num / 2;
    echo $metade . "<br>";

    if(round($metade) > 0){
        dividir($metade);
    }
}

dividir(100);

?>