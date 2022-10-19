<form method="POST">
    <h2>Qual seu nome?</h2>
    <input type="text" name="name" required>
    <input type="submit" value="Enviar">
</form>

<?php

if (isset($_POST["name"])) {
    echo "<h2>Opah, ".$_POST["name"]."</h2>";
}
