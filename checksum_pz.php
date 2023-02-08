<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function getChecksum($num){
        if ($num < 0 or $num > 999999999) return -1;
        $helper = $num;
        $checksum = 0;
        while ($helper > 0) {
            $pos = $helper % 10;
            $checksum += $pos;
            $helper = (int)($helper / 10);
        }
        return $checksum;
    }
    $num = -5;
    $result = getChecksum($num);
    if ($result == -1) echo "<p>Invalid number</p>";
    else
    echo "<p>$result</p>";
    ?>
</body>
</html>