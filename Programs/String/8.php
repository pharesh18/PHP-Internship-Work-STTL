<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String8</title>
</head>

<body>
    <?php
    $str = "Virat Kohli is the the Cricketer.";
    echo preg_replace("/the/", "best", $str, 1);
    ?>
</body>

</html>