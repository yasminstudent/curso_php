<?php 

$nome = 'Yasmin';

// código...

$nomeCompleto = $nome;
$nomeCompleto2 = $nome;

//Verificando se a variável existe p/ poder concatenar
$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';

//Mesma verificação mas com o recurso do php7.4
$nomeCompleto2 .= $sobrenome ?? '';

echo $nomeCompleto2;
?>