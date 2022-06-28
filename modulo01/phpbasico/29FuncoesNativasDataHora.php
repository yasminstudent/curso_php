<?php 

// Formatos de data: https://www.php.net/manual/pt_BR/datetime.formats.date.php
// Formatos de hora: https://www.php.net/manual/pt_BR/datetime.formats.time.php

echo date("d/m/Y H:i:s"); // padrão br
echo "<br>";
echo date("Y-d-m H:i:s"); // padrão americano
echo "<br>";
echo date("Y-m-d H:i:s"); // padrão internacional
echo "<br>";

$data = "2002-03-16";
$time = strtotime($data);

echo date("d/m/Y", $time); //16/03/2002
echo "<br>";
echo date("d/m/Y", 0); //01/01/1970

?>