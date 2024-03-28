<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print ASCII Value</title>
</head>

<body>

    <h2>Print ASCII Value</h2>

    <form method="post" action="">
        Enter a character: <input type="text" name="char" maxlength="1" required><br>
        <input type="submit" value="Print ASCII Value">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $char = $_POST["char"];
        $asciiValue = ord($char);
        echo "<p>ASCII value of $char is: $asciiValue</p>";
    }
    ?>

</body>

</html>