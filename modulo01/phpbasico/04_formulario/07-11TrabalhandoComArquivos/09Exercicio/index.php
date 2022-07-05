<form action="gravarNomes.php" method="POST">
    <label for="">
        Novo Nome: <br>
        <input type="text" name="nome">
        <input type="submit" value="Adicionar">
    </label>
</form>

<?php
    require_once("listarNomes.php");
?>