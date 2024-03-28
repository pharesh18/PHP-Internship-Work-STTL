<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect Number Check</title>
</head>

<body>

    <h2>Perfect Number Check</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required><br>
        <input type="submit" value="Check Perfect Number">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];

        $sum = 0;
        for ($i = 1; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                $sum += $i;
            }
        }

        $isPerfect = ($sum == $num);
        echo "<p>$num is " . ($isPerfect ? "a perfect number" : "not a perfect number") . ".</p>";
    }
    ?>

</body>

</html>