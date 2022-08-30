<?php
$arquivo = $_FILES["arquivo"];

/*
    em $_FILES vem algumas informações sobre o arquivo enviado
    como por exemplo: 
        nome,
        extensão,
        tamanho,
        local onde foi armazenado temporariamente...
*/

if (isset($arquivo["tmp_name"])) {
    $ext = pathinfo($arquivo["name"], PATHINFO_EXTENSION);
    $nomeArquivo = md5(time().rand(0, 99)).".".$ext;
    move_uploaded_file($arquivo["tmp_name"], "arquivos/".$nomeArquivo);
    header("Location: index.php");
}
