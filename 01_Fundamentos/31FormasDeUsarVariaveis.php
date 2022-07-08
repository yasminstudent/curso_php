<?php

$nome = "Yasmin";

//o php interpreta $nome como uma variável
echo "Meu nome é $nome <br>"; //Meu nome é Yasmin

//o php interpreta como texto de fato
echo 'Meu nome é $nome <br>'; //Meu nome é $nome

//recomenda-se usar dessa forma:
echo "Meu nome é " . $nome;
?>