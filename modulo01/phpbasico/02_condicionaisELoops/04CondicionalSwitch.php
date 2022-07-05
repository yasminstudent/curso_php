<?php

$linguagem = "php";

switch ($linguagem){ //variável que será verificada
    case "python": 
        // se $linguagem for igual a python, esse bloco de código será executado
        echo "linguagem feia";
        break;
    case "java":
        echo "linguagem fresca";
        break;
    case "php":
        echo "boa linguagem";
        break;
    default: //se não entrar em nenhum dos casos
        echo "não sei dizer";
        break;
}

?>