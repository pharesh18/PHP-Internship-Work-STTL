<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a Number</title>
</head>

<body>

    <h2>Reverse a Number</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required><br>
        <input type="submit" value="Reverse Number">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        $reversed = (int) strrev((string) $num);
        echo "<p>Reverse of $num is: $reversed</p>";
    }
    ?>

</body>

</html>