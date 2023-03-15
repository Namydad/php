<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKW</title>
</head>
<body>
    <?php
        require_once "lkw.class.php";
        require_once "pkw.class.php";

        $pkw1 = new PKW("MA-TL-311", true, 4);
        $pkw2 = new PKW("MA-TL-312", false, 6);
        $lkw1 = new LKW("MA-TL-313", false, 7.5);
        $lkw2 = new LKW("MA-TL-314", true, 12);
        echo $pkw1->holeDaten();
        echo $lkw1->holeDaten();
        echo $pkw2->holeDaten();
        echo $lkw2->holeDaten();
        echo LKW::getAnzahl();
        echo PKW::getAnzahl();
    ?>
</body>
</html>