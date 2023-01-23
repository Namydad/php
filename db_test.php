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


$table= "user"; 
$sql = "
            INSERT INTO $table VALUES(
                NULL,
                'Staudt',
                '1234',
                'staudt@wvss-mannheim.de'
            );

            ";

$dbh->exec($sql);

?>
</body>
</html>