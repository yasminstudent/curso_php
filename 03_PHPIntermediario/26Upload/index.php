<!-- 
enctype é o modo como os dados serão enviados
multipart/form-data -> usa-se quando se deseja fazer upload de arquivos
para que a informação seja enviada em pequenos pedaços
 -->
<form action="recebedor.php" enctype="multipart/form-data" method="POST">
    <input type="file" name="arquivo"><br><br>

    <input type="submit" value="Enviar">
</form>