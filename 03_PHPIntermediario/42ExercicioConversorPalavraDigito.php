<form method="POST">
    Conversor Palavra em Dígito <br>
    <input type="text" name="words" required>
    <input type="submit" value="Enviar">
    <hr>
</form>

<?php

if (isset($_POST["words"])) {
    $arrWords = ["um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove",];
    $arrDigits = range(1, 9);
    $words = $_POST["words"];
    $digits = str_replace($arrWords, $arrDigits, $words);

    echo $words . "<br>";
    echo $digits . "<br>";
}
