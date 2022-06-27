<?php
// Para ver mais funções de string: https://www.php.net/manual/pt_BR/ref.strings.php

$nomeSujo = "   Yasmin    ";
$nomeLimpo = trim($nomeSujo); 
//trim retira os espaços do ínicio e fim de uma string

echo "NOME SUJO: ". strlen($nomeSujo) . "<br/>"; 
echo "NOME LIMPO: ". strlen($nomeLimpo) . "<br/>";
// strlen retorna a quantidade de caracteres de uma string

$nome = "Yasmin Pereira";

echo strtolower($nome) . "<br/>"; //yasmin pereira
//strtolower transforma todos os caracteres de uma string em minúsculo

echo strtoupper($nome) . "<br/>"; //YASMIN PEREIRA
//strtoupper transforma todos os caracteres de uma string em maiúsculo

echo str_replace('Yasmin', 'Ingrid', $nome) . "<br/>"; //Ingrid Pereira
/* str_replace substitui parte de uma string
    recebe:
        - o que
        - pelo que
        - e onde
        vai substituir
*/

echo substr($nome, 0, 3) . "<br/>"; //Yas
echo substr($nome, -5, 2) . "<br/>"; //re
/* substr retorna parte de uma string
    recebe:
        - string completa
        - índice inicial
        - quantidade de caracteres que se deseja
*/

?>