<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check for Anagrams</title>
</head>

<body>

    <h2>Check for Anagrams</h2>

    <form method="post" action="">
        Enter the first string: <input type="text" name="str1" required><br>
        Enter the second string: <input type="text" name="str2" required><br>
        <input type="submit" value="Check Anagrams">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str1 = $_POST["str1"];
        $str2 = $_POST["str2"];

        $str1 = strtolower(str_replace(' ', '', $str1));
        $str2 = strtolower(str_replace(' ', '', $str2));
        $isAnagram = (count_chars($str1, 1) == count_chars($str2, 1));
        echo "<p>" . ($isAnagram ? "The strings are anagrams." : "The strings are not anagrams.") . "</p>";
    }
    ?>

</body>

</html>