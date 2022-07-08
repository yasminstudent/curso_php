<?php

// (condição) ? Resultado se for positivo : Resultado se for negativo

$idade = 20;

echo ($idade < 18) ? "Menor de idade" :  "Maior de idade";

echo "<br>";

$hora = 18;
$turno = ($hora >= 18) ? "noturno" : "diurno ou vespertino";

echo $turno;

?>