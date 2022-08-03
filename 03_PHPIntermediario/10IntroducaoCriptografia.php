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
