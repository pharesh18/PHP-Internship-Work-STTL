<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a String</title>
</head>

<body>

    <h2>Reverse a String</h2>

    <form method="post" action="">
        Enter a string: <input type="text" name="inputString" required><br>
        <input type="submit" value="Reverse">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];
        $reversedString = strrev($inputString);
        echo "<p>Reversed string: $reversedString</p>";
    }
    ?>

</body>

</html>