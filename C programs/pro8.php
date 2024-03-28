<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Check</title>
</head>

<body>

    <h2>Prime Number Check</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required><br>
        <input type="submit" value="Check Prime">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];

        $isPrime = true;
        if ($num <= 1) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        echo "<p>$num is " . ($isPrime ? "prime" : "not prime") . ".</p>";
    }
    ?>

</body>

</html>