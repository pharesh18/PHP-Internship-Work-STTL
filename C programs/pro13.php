<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary to Decimal Conversion</title>
</head>

<body>

    <h2>Binary to Decimal Conversion</h2>

    <form method="post" action="">
        Enter a binary number: <input type="text" name="binaryNum" required><br>
        <input type="submit" value="Convert to Decimal">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $binaryNum = $_POST["binaryNum"];
        $decimalNum = bindec($binaryNum);
        echo "<p>Decimal representation: $decimalNum</p>";
    }
    ?>

</body>

</html>