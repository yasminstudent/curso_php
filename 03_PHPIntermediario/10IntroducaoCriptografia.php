<?php

// criptografia irreversível
$senha = "yasmin123";
echo "Senha original: ".$senha."<br>"; //yasmin123
echo "Senha criptografada: ".md5($senha); //ad237a55c9c938f8e35311fd592af6de

echo "<br><br>";

// criptografia reversível
$senhaBase64 = base64_encode($senha);
echo "Senha criptografada: ".$senhaBase64."<br>"; //eWFzbWluMTIz
echo "Senha original: ".base64_decode($senhaBase64); //yasmin123

/* 
    obs: buscar outros métodos, md5 é um pouco inseguro

    "O certo hj em dia para se ter senhas seguras é usar o password_hash e o password_verify"
    
    "De todo modo, é muito melhor usar o PASSWORD_HASH com PASSWORD_DEFAULT 
    (que estará sempre atualizando a maneira mais segura de proteger aquele dado criptografado). 
    Vale salientar que os dados criptografados com esse mecanismo podem ter até 255 caracteres, 
    assim, reserve pelo menos este espaço no seu BD para eles." */
