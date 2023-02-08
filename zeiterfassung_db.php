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
//db_test.php

$db_eng = "mysql";          //in der prüfung unverändert
$db_host = "localhost";     //in der prüfung unverändert
$db_name = "zeiterfassung";   // un der Prüfung anpassen(!!!)
$db_user = "root";          //in der prüfung unverändert
$db_pass = "";        //in der prüfung unverändert

//immer identisch - in der Prüfung vergeben
$db_server = "$db_eng:host=$db_host;dbname=$db_name";
$dbh = new PDO($db_server, $db_user, $db_pass);

//Error-Modus auf Exception setzen
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$p_id = 1;

$sql = "SELECT * FROM ZeitErfassung WHERE z_p_id = $p_id";
try {
    $res = $dbh->query($sql);
    foreach ($res as $row) {
        echo "<p> ID: $row[z_id] | Art: $row[z_art] | Datum: $row[z_datum] | Zeit: $row[z_time] | $row[z_ip] </p> <br>";
    }
} 
catch (PDOException $e) {
}