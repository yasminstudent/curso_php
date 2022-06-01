<?php 
    /*
        Como funciona:

        O Apache
            Recebe a requisição
            Manda para o local correto (pasta)
            Chama o PHP para interpretar o código PHP
                O PHP manda o resultado para o Apache
            Junta com o que não é interpretável pelo PHP e manda p/ o usuário
    */
?>

Olá <?php echo "Yasmin"; ?>