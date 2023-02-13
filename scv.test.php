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
require_once "vigenere.class.php";

$v = new vigenere();
$v->setKlartext("Baraitaru");
$v->setGeheimtext("FUCK");
echo $v->verschluesseln();
?>
</body>
</html>