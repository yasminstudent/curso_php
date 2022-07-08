<?php
if (file_exists("pasta/teste.txt")) {
    copy("pasta/teste.txt", "teste.txt");
    echo "Arquivo copiado com sucesso!";
} else {
    echo "Crie o arquivo primeiro!";
}

?>