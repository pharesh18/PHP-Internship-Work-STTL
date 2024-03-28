<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorization of a Number</title>
</head>

<body>

    <h2>Factorization of a Number</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required><br>
        <input type="submit" value="Factorize">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];

        echo "<p>Factors of $num are: ";
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                echo "$i, ";
            }
        }
        echo "</p>";
    }
    ?>

</body>

</html>