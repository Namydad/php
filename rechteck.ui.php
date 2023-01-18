<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .labels { 
            font-size: 2rem;
            font-family: "Sans-Serif";
            font-weight: bold;
        }
    </style>
</head>
<h1>Dateneingabe: Rechteck</h1>
<form method="post" action = "rechteck_test.php">
    <div>
        <label>Serie a (in cm):
            <input type="number" min="0,1"  name="SeiteA" required>
        </label>
    </div>
    <div>
        <label>Serie b (in cm):
            <input  type="number" min="0,1" name="SeiteB" required>
        </label>
    </div>
    <button type="submit">Senden</button>
</form>
</body>
</html>