<?php

$dadoMalicioso = $_GET["usuario"]; //Aqui poderia ser enviado algo como:
// ' or 1=1;
// '; drop table users; select 'isso sou eu me livrando da outra aspa
// etc

$dadoSeguro = addslashes($dadoMalicioso); 
// adiciona uma \ antes de qualquer aspas, indicando ao mysql que as aspas 
// faz parte da string e que não se trata do fechamento do comando

$querySegura = "SELECT * FROM users WHERE usuario='${dadoSeguro}'";

//addslashes coloca só em caracteres especificos no addcslashes é em tudo

$queryInsegura = "SELECT * FROM users WHERE usuario='${dadoMalicioso}'";

echo $queryInsegura; 
//SELECT * FROM users WHERE usuario=''; drop table users; select 'isso sou eu me livrando da outra aspa'

echo "<br><br>";

echo $querySegura;
//SELECT * FROM users WHERE usuario='\'; drop table users; select \'isso sou eu me livrando da outra aspa'
