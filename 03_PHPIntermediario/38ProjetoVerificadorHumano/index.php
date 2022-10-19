<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$number1 = rand(0, 10);
$number2 = rand(0, 10);
$_SESSION["v"] = $number1 + $number2;
?>

<h1>Verificador de Humanos</h1>
<form action="check.php" method="POST">
    <?php echo $number1 . " + " . $number2 . " = ";?>
    <input type="number" name="result" required>
    <input type="submit" value="verificar">
</form>
