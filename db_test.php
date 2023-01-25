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
$db_name = "2bki21_2023_user";   // un der Prüfung anpassen(!!!)
$db_user = "root";          //in der prüfung unverändert
$db_pass = "";        //in der prüfung unverändert

//immer identisch - in der Prüfung vergeben
$db_server = "$db_eng:host=$db_host;dbname=$db_name";
$dbh = new PDO($db_server, $db_user, $db_pass);

//Error-Modus auf Exception setzen
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Daten Importieren
$u_alias = $_REQUEST['u_alias'];
$u_pw = $_REQUEST['u_pw'];
$u_email = $_REQUEST['u_email'];

$table= "user"; 
$sql = "
            INSERT INTO $table VALUES(
                NULL,
                '$u_alias',
                '$u_pw',
                '$u_email'
            );

            ";
    try {
        $dbh->exec($sql);
        echo "<p>Dataset successfully created</p>";

    } 
    catch (PDOException $e) {
        $errCode = $e->getCode();
        switch ($errCode) {
                case "23000":
                $errMessage = "<p>Entry already exists</p>"; break;
                default:
                $errMessage = "<p> OWO we had a fuckywucky on our end</p>";
        }

        // debugging
        //$errMessage = $e->getMessage();
        //echo "<p>Error: $errCode </p> <br>";
        echo "<p>Fehler-Meldung: $errMessage </p> <br>";
    }

    $sql = "SELECT * FROM $table";
    try {
        $res = $dbh->query($sql);
        foreach ($res as $row) {
            echo "<p>$row[0] | $row[1] | $row[2] | $row[3]</p> <br>";
        }
    } 
    catch (PDOException $e) {
    }
    
    echo "<p><a href = \"db_test_form.htm\"> return </a></p>";
?>
</body>
</html>