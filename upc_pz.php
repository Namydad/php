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
    function getUPC($upc) {
        $sum = 0;
        $sum2 = 0;
        $total = 0;
        $sum3 = 0;
        $result = 0;

        for ($i = 0; $i < strlen($upc); $i++) {
            if($i % 2 == 0){ // even position odd number
                $sum += $upc[$i];
            } else { // odd position even number
                $sum2 += $upc[$i];
            }
        }
        $sum = $sum * 2;
        $total = $sum + $sum2;
        $sum3 = $total % 10;
        $result = 10 - $sum3;
        if ($result == 10) return 0;
        return $result;
        
    }
    $upc = "111111111110";
    $result = getUPC($upc);
    echo "<p>$result</p>";
    ?>
</body>
</html>