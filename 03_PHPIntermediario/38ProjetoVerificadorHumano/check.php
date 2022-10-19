<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (isset($_POST["result"]) && isset($_SESSION["v"])) {
    $correctResult = $_SESSION["v"];
    $resultSent = $_POST["result"];

    if ($correctResult == $resultSent) {
        echo "<h1>Humano!</h1>";
    } else {
        echo "<h1>Fake!</h1>";
    }
} else {
    header("Location: index.php");
    exit;
}
