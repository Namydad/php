<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrzeug</title>
</head>
<body>
    <?php
    abstract class Fahrzeug
    {
        protected $knz;
        protected $verliehen;
    
        public function __construct($knz, $status){
            $this->knz = $knz;
            $this->verliehen = $status;
        }
        public function getKnz(){
            return $this->knz;
        }
        public function getStatus(){
            return $this->verliehen;
        }
        public function setStatus($status){
            $this->verliehen = $status;
        }
        public function setKnz($knz){
            $this->knz = $knz;
        }
    }
    ?>
</body>
</html>