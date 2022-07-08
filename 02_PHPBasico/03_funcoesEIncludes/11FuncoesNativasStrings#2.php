<?php
// Para ver mais funções de string: https://www.php.net/manual/pt_BR/ref.strings.php

function br(){
    echo "<br/>";
}

$nome = "yasmin pereira da silva";

echo ucwords($nome); //Yasmin Pereira Da Silva
br();

echo strpos($nome, 'pereira'); //7, retorna a posição onde se encontra a string procurada
br();

print_r(explode(' ', $nome)); 
//transforma uma string em array, usando o primeiro parâmetro como separador
br();

$numero = 12913.12;
echo number_format($numero, 2, ',', '.'); //12.913,12
/*
    Parâmetros:
    * número
    * quantidade de casas decimais
    * simbolo que divide as casas decimais das não decimais
    * simbolo usado para separar os milhares
*/

?>