<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Check</title>
</head>

<body>

    <h2>Palindrome Check</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required><br>
        <input type="submit" value="Check Palindrome">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        $original = $num;
        $reversed = (int) strrev((string) $num);
        $isPalindrome = ($original == $reversed);
        echo "<p>$num is " . ($isPalindrome ? "a palindrome" : "not a palindrome") . ".</p>";
    }
    ?>

</body>

</html>