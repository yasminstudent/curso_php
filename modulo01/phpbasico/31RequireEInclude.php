<?php

/*
    Diferença entre require e include:
        Se ocorrer um erro ao importar um arquivo
            o require exibe um erro e para a execução do código 
            o include exibe um erro e não para a execução do código
    
    Diferença entre require/include e require_once/include_once:
        Se o programador importar o mesmo arquivo mais de uma vez
            o require/include irá importar o arquivo novamente
            o require_once/include_once não irá importar o arquivo novamente
*/

require_once('31CabecalhoExemplo.php');
require_once('31CabecalhoExemplo.php'); //não irá importar o arquivo novamente

echo "Conteúdo do site";

?>