<?php

    $nome = "Yasmin";
    $sobrenome = "Pereira";

    //Concatenando variáveis
    $nomeCompleto = $nome . " " . $sobrenome;

    //Colocando entre aspas duplas
    $nomeCompleto = "$nome $sobrenome";

    //Concatenando (de uma maneira diferente)
    $nome = "Yasmin ";
    $nomeCompleto = $nome;
    $nomeCompleto .= $sobrenome;

    echo $nomeCompleto;
?>