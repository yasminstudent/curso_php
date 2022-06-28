<?php

function exercicio($date){

    $diasDaSemana = [
        "Domingo",
        "Segunda-Feira", 
        "Terça-Feira", 
        "Quarta-Feira", 
        "Quinta-Feira", 
        "Sexta-Feira", 
        "Sábado"
    ];
    
    echo date("d/m/Y", strtotime($date)) . " - " .
         $diasDaSemana[date("w", strtotime($date))];
}

exercicio("2022-07-02");

?>