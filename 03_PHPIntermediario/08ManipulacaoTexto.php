<?php
//mais exemplos em: 02_PHPBasico\03_funcoesEIncludes\09FuncoesNativasMatematica.php

function f1() {
   // transforma uma string em um array
   $nome = "Bonieky Lacerda Leal";
   $arr = explode(" Lacerda ", $nome); //recebe o separador e a string
   print_r($arr); //["Bonieky", "Leal"]
}

function f2() {
    // transforma um array em uma string
    $nome = ["Bonieky", "Lacerda", "Leal"];
    $string = implode(" ", $nome);  //recebe o separador e o array
    echo $string; //Bonieky Lacerda Leal
}

function f3() {
    // formata um número
    /*
        recebe: 
        o número
        quantidade de casas decimais
        separador das casas decimais
        separador da unidade de milhar
    */
    $num = number_format(34989.12123, 2, ",", ".");
    echo $num; //34.989,12
}

function f4() {
    // substitui parte de uma string por outra
    $frase = "Eu gosto de café com leite";

    //recebe o que, pelo que e onde quero trocar
    echo str_replace("leite", "chocolate", $frase); //Eu gosto de café com chocolate
    
}

function f5() {
    // transforma todos os caracteres em minúsculos
    echo strtolower("YASMIN PEREIRA DA SILVA"); //yasmin pereira da silva
}

function f6() {
    // transforma todos os caracteres em maiúsculos
    echo strtoupper("yasmin pereira da silva"); //YASMIN PEREIRA DA SILVA
}

function f7() {
    // retorna parte de uma string
    /*
        recebe:
        string, 
        inicio da captura e 
        quantos caracteres se deseja capturar
    */
    echo substr("Yasmin", 0, 3) . "<br>"; //Yas
    echo substr("Yasmin", 3, 3) . "<br>"; //min
}

function f8() {
    // transforma a primeira letra da primeira palavra em maiúscula
    echo ucfirst("yasmin pereira da silva"); //Yasmin pereira da silva
}

function f9() {
    // transforma a primeira letra de todas as palavras em maiúsculas
    echo ucwords("yasmin pereira da silva"); //Yasmin Pereira Da Silva
}

f9();
