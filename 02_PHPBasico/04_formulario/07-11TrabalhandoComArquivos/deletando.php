<?php

if (file_exists("nomeDoArquivo.txt")) {
    unlink("nomeDoArquivo.txt"); //deleta o arquivo
    echo "Arquivo excluído com sucesso!";
} else {
    echo "Crie o arquivo primeiro!";
}

?>