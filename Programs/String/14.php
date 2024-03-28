<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String14</title>
</head>

<body>
    <?php
    $str = "0011,, 1001, 0032 45,024 023 ,423 30 04 000";
    echo preg_replace("/,/", "", $str);
    ?>
</body>

</html>