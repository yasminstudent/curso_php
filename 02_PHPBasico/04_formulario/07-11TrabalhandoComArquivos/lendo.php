<?php

//consegue também ler arquivos externos (de outros servidores), basta informar a url
$texto = file_get_contents("exemplo.txt");

echo "<h1>" . $texto . "</h1>";

?>