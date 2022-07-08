<?php

$novoNome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

if (empty($novoNome) == false) {
    $nomes = file_get_contents("nomes.txt");

    if (empty($nomes)) { //adiciona o primeiro nome a lista
        $nomes = $novoNome;
    } else {
        $nomes .= "\n" . $novoNome;
    }

    file_put_contents("nomes.txt", $nomes);
} 

header("Location: index.php");
exit;

?>