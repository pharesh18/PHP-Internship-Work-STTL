<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Vowels and Consonants</title>
</head>

<body>

    <h2>Count Vowels and Consonants in a String</h2>

    <form method="post" action="">
        Enter a string: <input type="text" name="inputString" required><br>
        <input type="submit" value="Count">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = strtolower($_POST["inputString"]);
        $vowels = 0;
        $consonants = 0;

        for ($i = 0; $i < strlen($inputString); $i++) {
            $char = $inputString[$i];
            if (ctype_alpha($char)) {
                if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
                    $vowels++;
                } else {
                    $consonants++;
                }
            }
        }
        echo "<p>Vowels: $vowels, Consonants: $consonants</p>";
    }
    ?>

</body>

</html>