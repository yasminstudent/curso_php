<?php

/*
    Opções de filtro:
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_URL
    (as variáveis não recebem nada, se um dado válido não for enviado)

    outras opções:
    (esse tipo de filtro retira tudo que não é válido)
    FILTER_SANITIZE_EMAIL
    FILTER_SANITIZE_NUMBER_FLOAT
    FILTER_SANITIZE_NUMBER_INT //Ex, se for enviado: 90 anos, ele retira a palavra anos
    FILTER_SANITIZE_IP
    FILTER_SANITIZE_URL
    FILTER_SANITIZE_STRING
    FILTER_SANITIZE_SPECIAL_CHARS //Se receber código malicioso, com algum <script>,
    //esse filtro faz com que o texto seja interpretado como string de fato

    caso queira validar o dado de uma variável qualquer, pode-se usar o 
    filter_var($variavel, UM_DOS_FILTROS_ACIMA)
*/

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); 
//faça o teste e envie <script>alert('V0C3 F01 H4CK3AD0')</script>

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//faça o teste e envie 1234

$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
//faça o teste e envie 90 anos

if($nome){
    echo "Nome: ".$nome."<br>";
    echo "Email: ".$email."<br>";
    echo "Idade: ".$idade."<br>";
}
else{
    header("Location: 35ValidandoDadosFormularioFront.php");
    exit;
}

?>