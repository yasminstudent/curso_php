<?php

// Resumo:
// fatal error -> para a execução do código
// warning -> continua a execução do código
// parse error -> geralmente é falta de ; na linha de cima

//echo funcaoQueNaoExiste();
/*
    Fatal error: Uncaught Error: Call to undefined function funcaoQueNaoExiste() in 
    C:\Apache24\htdocs\estudos\Curso-PHP-Completo\03_PHPIntermediario\16ErrosExcecoes.php:8 
    Stack trace: #0 {main} thrown in 
    C:\Apache24\htdocs\estudos\Curso-PHP-Completo\03_PHPIntermediario\16ErrosExcecoes.php on line 8
*/
//echo "olá"; // esse echo não foi executado por causa do erro acima


//echo $variavelQueNaoExiste;
/*
    Warning: Undefined variable $variavelQueNaoExiste in 
    C:\Apache24\htdocs\estudos\Curso-PHP-Completo\03_PHPIntermediario\16ErrosExcecoes.php on line 18
*/
//echo "teste"; // esse echo foi executado

// echo "ola, <br>"
// echo "tudo bom?";
/*
    Parse error: syntax error, unexpected token "echo", 
    expecting "," or ";" in 
    C:\Apache24\htdocs\estudos\Curso-PHP-Completo\03_PHPIntermediario\16ErrosExcecoes.php on line 26
*/
