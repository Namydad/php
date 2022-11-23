<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto Statistik Tool</title>
    <style>
        body {
            background-color: grey;
        }
        .kugel {
            border: 2px solid black;
            width: 70px;
            height: 70px;
            display: inline-block;
            font-size: 32px;
            text-align: center;
            font-weight: bold;
            font-family: "arial";
            line-height: 70px;
            border-radius: 50%;
            text-align: center;
        }
        .wrapper {
            margin: 0 auto;
            width: 80%;
            text-align: center;
            background-color: purple;
            padding: 40px 20px;
        }
        .mybutton {
            background-color: #000000;
            color: #ffffff;
            border-radius: 11px;
            padding: 20px;
            padding: 20px 45px;
            display: inline-block;
            text-align: center;
            text-shadow: 1px 1px #000000;
        }
    </style>
</head>
<body>
    <h1>Bitte Tippen Sie hier ihre Zahlen</h1>
    
    <form action = "lottostat.php">


        <?php
            for($i = 1; $i <= 6; $i++)
                {
                    echo "<label>#$i: 
                                <input type = \"number\" name = \"tipp[]\" max = \"49\" min = \"1\">
                            </label>\n";
                }	
        ?>	
        <label>Wieviele Ziehungen?
            <input type="number" name="anzahl">
        </label>
	    <input type="submit" value="Wette Abgeben!!!">
</form>
</body>
</html>