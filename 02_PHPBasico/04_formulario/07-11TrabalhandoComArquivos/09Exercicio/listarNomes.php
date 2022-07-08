<?php

$nomes = file_get_contents("nomes.txt");
$arrayNomes = explode("\n", $nomes);

if (empty($nomes) == false) {
    echo "<ul>";

    foreach($arrayNomes as $nome){
        echo "<li>" . $nome ."</li>";
    }

    echo "</ul>";
}

?>