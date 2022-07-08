<?php
session_start();

if (isset($_SESSION["mensagem"])) {
    echo "<h2>" . $_SESSION["mensagem"] ."</h2>";
    unset($_SESSION["mensagem"]);
}
?>

<!-- 
    enctype="multipart/form-data"

    muda a forma que os dados serão enviados
    para que seja possível enviar um arquivo
 -->
<form method="POST" action="recebedor.php" enctype="multipart/form-data">
    <input type="file" name="arquivo" /> <br><br>
    <input type="submit" value="Enviar" />
</form>

<?php
    if (file_exists("arquivos/perfil.jpg")) {
?>
    <br><br>
    <img src="arquivos/perfil.jpg" title="perfil" width="200" />
<?php
    }
?>