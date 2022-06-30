<?php

// Ao importar um arquivo aqui, não considerar pasta onde 
// esse arquivo (header.php) se encontra, e sim considerar a localização
// do arquivo que irá importar o header.php

//considerando a localização do arquivo header (isso gera um erro)
//require_once("../../config.php"); 

//considerando a localização dos arquivos home.php e sobre.php
require_once("../config.php"); 
?>

<h1>Cabeçalho do site <?php echo $versaoAPP; ?></h1>
<hr>