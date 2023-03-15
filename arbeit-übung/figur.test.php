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
    require_once "kreis.class.php";

    $k1 = new Kreis(11, 22, 10.0);
    echo $k1->holeName();
    echo "<br>x: ".$k1->getX()."<br>";
    echo "y: ".$k1->getY()."<br>";


    
    $r = $k1->getRadius();
    $r_f = number_format($r, 2, ",",".");
    echo "Radius: $r_f cm <br>";


    $u = $k1->holeUmfang();
    $u_f = number_format($u, 2, ",",".");
    echo "Umfang: $u_f cm <br>";
    
    $f = $k1->holeFlaeche();
    $f_f = number_format($f, 2, ",",".");
    echo "Fläche: $f_f cm²   <br>";
    
    

?>
</body>
</html>