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
    require_once "figur.class.php";
    class Kreis extends Figur {
        //Member_Attribute 
        //$x und $y werden geerbt
        private $radius;
        
        

        public function __construct($x, $y, $r) {
            parent::__construct($x, $y);
            $this->radius=$r;
        }

        public function getRadius(){
            return $this->radius;
        }
        

        //Prototypen (absrtakte Funktionen) implementieren

public function holeName(){
    return "<h2>Kreis</h2>
            ==============";
}
public function holeFlaeche(){
    $u = 2*pi()*$this->radius;
    return $u;
}
public function holeUmfang(){
    $f = pi() * $this->radius * $this->radius;
    return $f;
}

    }

    ?>
</body>
</html>
Collapse
kreis.class.php
2 KB
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
