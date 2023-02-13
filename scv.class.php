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
class Symetrischescodierungsverfahren
{
    //attribute 
    protected $Klartext;
    protected $Geheimtext;

    //setter getter
    public function setKlartext($text)
    {
        $this->Klartext = $Klartext;
    }
    public function getKlartext()
    {
        return $this->Klartext;
    }
    public function setGeheimtext($key)
    {
        $this->Geheimtext = $key;
    }

    //constructor
    public function __construct($Klartext, $Geheimtext)
    {
        $this->Klartext = $Klartext;
        $this->Geheimtext = $Geheimtext;
    }
    public abstract function verschluesseln(){
        //code
    }
}
?>
</body>
</html>