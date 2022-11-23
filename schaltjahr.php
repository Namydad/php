<!DOCTYPE html>
<html>
    <head>
        <title>einfVerzform.php</title>
        <style>
            .alert  {
                color: red;
                font-weight: bold;
                font-size:300;
            }
            .ok {
                color:green;
                font-weight:bold;
                font-size:300;
            }
        </style>
    </head>
    <body>
        <h1> Zweifache If/Else verzweigung </h1>


        <?php
            // infachVerzVerarb.php
            $geschw = $_REQUEST['geschw'];
            echo "<p> Ihre aktuelle Geschwindigkeit: $geschw</p>";
            
            if($geschw % 4 == 0 && $geschw % 100 != 0)    {
                echo "<div class=\"alert\" > Schaltjahr! </div>";
            }
            else if($geschw % 100 == 0 && $geschw % 400 == 0)  {
                echo "<div class=\"alert\" > Schaltjahr! </div>";
            }
            else{
                echo "<div class=\"ok\" > Kein Schaltjahr </div>";
            }
        ?>
    </body>
</html>