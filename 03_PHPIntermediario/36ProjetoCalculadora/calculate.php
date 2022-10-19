<?php

if (isset($_GET["numberone"]) && isset($_GET["numbertwo"]) && isset($_GET["operation"])) {
    $numberOne = $_GET["numberone"];
    $numberTwo = $_GET["numbertwo"];
    $operation = $_GET["operation"];

    switch ($operation) {
        case "subtract":
            $result = $numberOne - $numberTwo;
            echo "<h1>".$numberOne." - ".$numberTwo." = ".$result."</h1>";
            break;
        case "sum":
            $result = $numberOne + $numberTwo;
            echo "<h1>".$numberOne." + ".$numberTwo." = ".$result."</h1>";
            break;
        case "divide":
            $result = $numberOne / $numberTwo;
            echo "<h1>".$numberOne." / ".$numberTwo." = ".$result."</h1>";
            break;
        case "multiply":
        default:
            $result = $numberOne * $numberTwo;
            echo "<h1>".$numberOne." * ".$numberTwo." = ".$result."</h1>";
            break;
    }
} else {
    header("location: index.php");
    exit;
}
