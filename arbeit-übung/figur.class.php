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

    abstract class Figur {

        //Member_Attribute 
        protected $x;
        protected $y;

        public function __construct($x, $y) {
            $this->x = $x;
            $this->y = $y;
        }
            public function getX(){
                return $this->x;
            }
            public function getY(){
                return $this->y;
            }
            

        // yet to come
        //holeAbstand(...)

        //Prototypen (absrtakte Funktionen)

public abstract function holeName();
public abstract function holeFlaeche();
public abstract function holeUmfang();

    }

    ?>
</body>
</html>