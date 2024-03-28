<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Check</title>
</head>

<body>

    <h2>Armstrong Number Check</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required><br>
        <input type="submit" value="Check Armstrong Number">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        $originalNum = $num;
        $numDigits = strlen((string) $num);

        $sum = 0;
        while ($num > 0) {
            $digit = $num % 10;
            $sum += pow($digit, $numDigits);
            $num = (int) ($num / 10);
        }

        $isArmstrong = ($sum == $originalNum);
        echo "<p>$originalNum is " . ($isArmstrong ? "an Armstrong number" : "not an Armstrong number") . ".</p>";
    }
    ?>

</body>

</html>