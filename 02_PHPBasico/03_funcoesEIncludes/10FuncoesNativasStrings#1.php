<?php
// Para ver mais funções de string: https://www.php.net/manual/pt_BR/ref.strings.php

function br(){
    echo "<br>";
}

// ----- TRIM -----
$nomeSujo = "   Yasmin    ";
$nomeLimpo = trim($nomeSujo); //retira os espaços do ínicio e fim de uma string


// ----- STRLEN -----
echo "NOME SUJO: ". strlen($nomeSujo); // strlen retorna a quantidade de caracteres de uma string
br();
echo "NOME LIMPO: ". strlen($nomeLimpo);
br();


$nomeCompleto = "Yasmin Pereira";
// ----- STRTOLOWER -----
echo "LOWER: ";
echo strtolower($nomeCompleto); //yasmin pereira
//transforma todos os caracteres de uma string em minúsculo
br();


// ----- STRTOUPPER -----
echo "UPPER: ";
echo strtoupper($nomeCompleto); //YASMIN PEREIRA
//transforma todos os caracteres de uma string em maiúsculo
br();


// ----- STR_REPLACE -----
echo "REPLACE: ";
echo str_replace('Yasmin', 'Ingrid', $nomeCompleto); //Ingrid Pereira
/* str_replace substitui parte de uma string
    recebe:
        - o que
        - pelo que
        - e onde
        vai substituir
*/
br();


// ----- SUBSTR -----
echo substr($nomeCompleto, 0, 3); //Yas
br();
echo substr($nomeCompleto, -5, 2); //re
/* substr retorna parte de uma string
    recebe:
        - string completa
        - índice inicial
        - quantidade de caracteres que se deseja
*/

?>