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
    require_once("scv.php");
    class vigenere extends Symetrischescodierungsverfahren {
        //Abstrakte Fuktion der Elternklasse überschreiben
        public function verschluesseln(){
            $klar = $this->Klartext;
            $key = $this->Geheimtext;
            $buchszahl_a = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
            $buchszahl_s = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

            for($i = 0; $i < strlen($klar); $i++){
                $buchs_klar = $klar[$i];
                $zahl_klar = array_search( $buchs_klar, $buchszahl_a);

                echo " $buchs_klar ### $zahl_klar <br>"
            }
        }
    }
    ?>
</body>
</html>