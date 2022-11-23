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
            
            if($geschw < 60)    {
                echo "<div class=\"alert\" > Geschwindigkeit zu langsam! </div>";
            }
            else if($geschw > 130)  {
                echo "<div class=\"alert\" > Geschwindigkeit zu hoch! </div>";
            }
            else{
                echo "<div class=\"ok\" > Geschwindigkeit OK </div>";
            }
        ?>
    </body>
</html>