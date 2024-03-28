<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String16</title>
</head>

<body>
    <?php
    $str = "a";
    while (ord($str) < 123) {
        echo $str;
        $str = chr(ord($str) + 1);
    }
    ?>
</body>

</html>