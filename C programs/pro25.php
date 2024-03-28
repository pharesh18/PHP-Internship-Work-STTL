<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LCM</title>
</head>

<body>

    <h2>LCM (Least Common Multiple)</h2>

    <form method="post" action="">
        Enter the first number: <input type="number" name="num1" required><br>
        Enter the second number: <input type="number" name="num2" required><br>
        <input type="submit" value="Calculate LCM">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $tempNum1 = $num1;
        $tempNum2 = $num2;
        while ($tempNum2 != 0) {
            $temp = $tempNum2;
            $tempNum2 = $tempNum1 % $tempNum2;
            $tempNum1 = $temp;
        }

        $lcm = ($num1 * $num2) / $tempNum1;
        echo "<p>LCM of $num1 and $num2 is: $lcm</p>";
    }
    ?>

</body>

</html>