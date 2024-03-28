<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String9</title>
</head>

<body>
    <?php
    function generatePassword($str)
    {
        $dataString = "1234567890qwertyuiopasdfghjklzxcvbnm";
        return substr(str_shuffle($dataString . $str), 0, 12);
    }

    $str = "password";
    echo generatePassword($str);
    ?>
</body>

</html>