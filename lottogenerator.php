<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottogenerator</title>
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
    <div class="wrapper">
    <?php
    $topf = range(0,49); // Zahlen wert von 0-49
    unset($topf[0]);    // $topf[0] is not used // keine Null!!
    $ziehung = array_rand($topf,6); // 6 Zufallszahlen
    
    foreach($ziehung as $kugel) {
        echo "<div class=\"kugel\">$kugel</div>\n";
    }

    ?>
    <form>
        <button class="mybutton"> No No! </button>
    </form>
    </div>
</body>
</html>