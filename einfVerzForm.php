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
        <h1> PhP </h1>


        <?php
            //einfachVerzVerarb.php
            $geschw = $_REQUEST['geschw'];
            echo "<p> Ihre aktuelle Geschwindigkeit: $geschw</p>";
            
            if($geschw > 80)    {
                echo "<div class= \"alert\"> Achtung! hohe Geschwindigkeit! </div>";
            }
            else    {
                echo "<div class= \"ok\"> Gut </div>";
            }
        ?>
    </body>
</html>