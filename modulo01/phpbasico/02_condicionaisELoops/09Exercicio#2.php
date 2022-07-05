<?php
/*
    Objetivo: 
        Imprimir na tela

        -
        --
        ---
        (até chegar a 19 traços)
*/

$cont = 0;

while($cont < 20){

    $cont2 = 0;
    while($cont2 < $cont){
        echo "-";
        $cont2++;
    }

    echo "<br>";
    $cont++;
}

?>