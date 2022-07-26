<?php
//mais exemplos em: 02_PHPBasico\03_funcoesEIncludes\14FuncoesNativasDataHora.php
echo time(); //Retorna o número de segundos que passaram desde 1 de janeiro de 1970 00:00:00
// (começo da era UNIX)

echo "<br><br>";
echo mktime(12, 0, 0, 3, 16, 2002); //Retorna o timestamp Unix correspondente aos argumentos informados. 
//Este timestamp é um inteiro longo contendo o número de segundos entre 
//a Era Unix (January 1 1970 00:00:00 GMT), e o tempo especificado.
/*
mktime(
    int $hour = date("H"),
    int $minute = date("i"),
    int $second = date("s"),
    int $month = date("n"),
    int $day = date("j"),
    int $year = date("Y"),
    int $is_dst = -1
): int
*/
echo "<br><br>";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
//string para data
//A função espera que seja informada uma string contendo um formato de data em inglês US, 
//e tentará interpretá-lo para um timestamp Unix 
//(o número de segundos desde January 1 1970 00:00:00 GMT), 
//relativo ao timestamp dado em now (segundo parâmetro), ou a hora atual se now não é fornecido.

echo "<br><br>";
echo date("d/m/Y H:i:s", strtotime("+1 week 2 days 4 hours 2 seconds"));

echo "<br><br>";
echo date("d/m/Y", 0); //01/01/1970
