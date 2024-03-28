<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String10</title>
</head>

<body>
    <?php
    function getNextCharacter($char)
    {
        $dataString = "1234567890qwertyuiopasdfghjklzxcvbnm";
        $idx = strpos($dataString, $char);
        if ($idx > 0) {
            if ($idx == strlen($dataString) - 1) {
                return $dataString[0];
            } else {
                return $dataString[$idx + 1];
            }
        }
        return "Character not found";
    }

    $char = "h";
    echo getNextCharacter($char);
    ?>
</body>

</html>