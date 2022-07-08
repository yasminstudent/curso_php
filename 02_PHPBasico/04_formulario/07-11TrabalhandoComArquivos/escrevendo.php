<?php

$texto = file_get_contents("exemplo.txt");
$texto .= "\n<br>PHP não é uma linguagem feia!";

/*
    a função file_put_contents procura um arquivo com o nome informado
        se não existir o arquivo ainda, a função cria um
        se já existir o arquivo, ela o substitui
    
    OBS: em linux e mac é necessário dá permissão na pasta p/ que o 
    comando funcione corretamente
*/
file_put_contents("exemplo.txt", $texto);

echo "<h1>Arquivo criado ou editado com sucesso!</h1>";

?>