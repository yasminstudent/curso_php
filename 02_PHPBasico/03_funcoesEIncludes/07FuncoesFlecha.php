<?php
//Recurso disponível a partir do php 7.4

//Esse recurso só funciona se a função tiver apenas uma linha de comando
//E ela não precisa da palavra return

$dizimo = fn($valor) => $valor * 0.1;

echo $dizimo(56);

?>