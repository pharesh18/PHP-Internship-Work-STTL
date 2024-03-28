<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Binary Conversion</title>
</head>

<body>

    <h2>Decimal to Binary Conversion</h2>

    <form method="post" action="">
        Enter a decimal number: <input type="number" name="decimalNum" required><br>
        <input type="submit" value="Convert to Binary">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $decimalNum = $_POST["decimalNum"];
        $binaryNum = decbin($decimalNum);
        echo "<p>Binary representation: $binaryNum</p>";
    }
    ?>

</body>

</html>