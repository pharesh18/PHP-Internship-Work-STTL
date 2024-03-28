<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Sum of Digits</title>
</head>

<body>

    <h2>Calculate Sum of Digits</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required><br>
        <input type="submit" value="Calculate Sum">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = abs($_POST["num"]);
        $sum = 0;
        while ($num > 0) {
            $sum += $num % 10;
            $num = (int) ($num / 10);
        }
        echo "<p>Sum of digits: $sum</p>";
    }
    ?>

</body>

</html>