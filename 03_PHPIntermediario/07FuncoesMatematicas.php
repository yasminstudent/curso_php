<?php
//mais exemplos em: 02_PHPBasico\03_funcoesEIncludes\09FuncoesNativasMatematica.php

function br() {
    return "<br>";
}

function f1() {
    // retorna o valor absoluto
    echo abs(-4.2) . br(); // 4.2 (double/float)
    echo abs(5) . br();    // 5 (integer)
    echo abs(-5) . br();   // 5 (integer)
}

function f2() {
    // arredonda um número
    echo round(3.4) . br(); // 3 (double/float)
    echo round(3.5) . br(); // 4 (double/float)
    echo round(3.6) . br(); // 4 (double/float)
}

function f3() {
    // arredonda um número para cima
    echo ceil(4.3) . br();    // 5
    echo ceil(9.999) . br();  // 10
    echo ceil(-3.14) . br();  // -3
}

function f4() {
    // arredonda um número para baixo
    echo floor(4.3) . br();   // 4
    echo floor(9.999) . br(); // 9
    echo floor(-3.14) . br(); // -4
}

function f5() {
    // retorna um inteiro aleatório
    echo rand() . br();
    echo rand() . br();
    echo rand(5, 15) . br(); //entre 5 e 15
}

f5();
