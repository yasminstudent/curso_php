<!-- 
basta adicionar a propriedade multiple na tag input
 -->
<form action="recebedor.php" enctype="multipart/form-data" method="POST">
    <input type="file" name="arquivo[]" multiple><br><br>

    <input type="submit" value="Enviar">
</form>