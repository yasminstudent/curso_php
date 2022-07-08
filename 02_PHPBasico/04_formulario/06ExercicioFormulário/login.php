<?php
session_start();

if (isset($_SESSION["erro"])) {
    echo "<h2>" . $_SESSION["erro"] . "</h2>";
    unset($_SESSION["erro"]);
}
?>
<form action="salvarNome.php" method="POST">
    <label for="">
        <h2>Qual o seu nome?</h2>
        <input type="text" name="nome">
    </label>

    <input type="submit" value="salvar">
</form>