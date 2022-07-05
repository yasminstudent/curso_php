<?php
/*
    A função rename serve para renomear arquivos:

    rename("nomeAntigo.txt", "novoNome.txt")

    mas pode ser usada para mover arquivos também:

    rename("novoNome.txt", "pasta/novoNome.txt")

*/

if (file_exists("teste.txt")) {
    rename("teste.txt", "pasta/teste.txt");
    echo "Arquivo movido com sucesso!";
} else {
    echo "Crie o arquivo primeiro!";
}

?>