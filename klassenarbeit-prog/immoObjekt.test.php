<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>immObjekt Test</title>
</head>
<body>
    <?php
        require_once "EinfHaus.class.php";

        $Haus1 = new EinfHaus("M-1-12345", 12345, "Musterstadt", 1990, 300000, true);

        echo $Haus1->datenAusgeben();
    ?>
</body>
</html>