<?php 
$x = 8;

switch($x) { //variável que será verificada
    case 0:
    case 1:
        echo "O X eh zero ou 1";
        break;
    case 2:
        echo "O X eh dois";
        break;
    case 3:
        echo "O X eh três";
        break;
    default: //se não entrar em nenhum dos casos
        echo "O X nao eh nada nem ninguem";
        break;
}
?>