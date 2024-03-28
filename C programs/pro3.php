<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Even or Odd</title>
</head>

<body>

    <h2>Check Even or Odd</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required><br>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];

        if ($num % 2 == 0) {
            echo "<p>$num is even.</p>";
        } else {
            echo "<p>$num is odd.</p>";
        }
    }
    ?>

</body>

</html>