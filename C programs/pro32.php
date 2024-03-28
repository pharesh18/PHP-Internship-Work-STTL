<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Words in a Sentence</title>
</head>

<body>

    <h2>Count Words in a Sentence</h2>

    <form method="post" action="">
        Enter a sentence: <input type="text" name="sentence" required><br>
        <input type="submit" value="Count Words">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sentence = $_POST["sentence"];
        $wordCount = str_word_count($sentence);
        echo "<p>Number of words in the sentence: $wordCount</p>";
    }
    ?>

</body>

</html>