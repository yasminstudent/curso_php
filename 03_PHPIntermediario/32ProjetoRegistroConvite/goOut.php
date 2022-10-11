<?php
require_once("config.php");

if (isset($_SESSION["login"])) {
    unset($_SESSION["login"]);
}

redirectToLogin();
