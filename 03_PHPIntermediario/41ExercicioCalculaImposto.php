<h2>Calculadora de Imposto</h2>

<form method="POST">
    Valor do produto: <br>
    <input type="number" name="product_value" required> <br><br>

    Taxa de imposto: <br>
    <input type="number" name="tax_rate" required> <br><br>

    <input type="submit" value="Calcular">
</form>

<?php

if (isset($_POST["product_value"]) && isset($_POST["tax_rate"])) {
    $productValueTax = $_POST["product_value"];
    $taxRate = $_POST["tax_rate"];
    $tax = ($productValueTax * $taxRate) / 100;
    $productValue = $productValueTax - $tax;

    echo "Valor do produto: R$ ".$productValueTax."<br>";
    echo "Taxa de imposto: ".$taxRate."%<br>";
    echo "<hr>";
    echo "Imposto: R$ ".$tax."<br>";
    echo "Produto: R$ ".$productValue."<br>";
}
