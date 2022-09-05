<?php
$files = $_FILES["arquivo"];

$numberFiles = count($files["tmp_name"]);
for ($i = 0; $i < $numberFiles; $i++) {
    $extensionFile = pathinfo($files["name"][$i], PATHINFO_EXTENSION);
    $nameFile = md5(time().rand(0, 99)).".".$extensionFile;
    move_uploaded_file($files["tmp_name"][$i], "arquivos/".$nameFile);
}

header("Location: index.php");
