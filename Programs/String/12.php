<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String12</title>
</head>

<body>
    <?php
    $str = "hello world!";
    $insertString = "my ";

    echo substr($str, 0, 6) . $insertString . substr($str, 6);
    ?>
</body>

</html>