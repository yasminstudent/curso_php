<?php
//Validando se os dados foram enviados e se não estão vazios
if (isset($_POST["email"]) && empty($_POST["email"]) == false) {
    if (isset($_POST["senha"]) && empty($_POST["senha"]) == false) {

        //recuperando os dados enviados
        $email = $_POST["email"];
        $senha = $_POST["senha"];
    
        echo "Meu email eh: ".$email . "<br>";
        echo "Minha senha eh: ".$senha . "<br>";
    }
}
?>