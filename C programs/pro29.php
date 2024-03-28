<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Concatenation</title>
</head>

<body>

    <h2>String Concatenation</h2>

    <form method="post" action="">
        Enter the first string: <input type="text" name="str1" required><br>
        Enter the second string: <input type="text" name="str2" required><br>
        <input type="submit" value="Concatenate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str1 = $_POST["str1"];
        $str2 = $_POST["str2"];
        $result = $str1 . $str2;
        echo "<p>Concatenated string: $result</p>";
    }
    ?>

</body>

</html>