<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>
    </head>
    <body>
        <form action="calculate.php" method="get">
            <input type="number" name="numberone" required>

            <select name="operation" required>
                <option value="subtract">-</option>
                <option value="sum">+</option>
                <option value="divide">/</option>
                <option value="multiply">*</option>
            </select>

            <input type="number" name="numbertwo" required>

            <input type="submit" value="calcular">
        </form>
    </body>
</html>