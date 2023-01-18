<!DOCTYPE html>
<html>
<head>
  <title>Calc File</title>
  <style>
    body {
      font-family: sans-serif;
      text-align: center;
      padding: 30px;
    }
    input {
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
    }
    button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #333;
      color: #fff;
      border: none;
    }
    .output {
      padding: 20px;
      font-size: 24px;
      background-color: #333;
      color: #fff;
      margin-top: 20px;
    }
  </style>
</head>
<body>
    <h1>Function Calc</h1>
  <form method="POST">
        <input type="text" name="number1" placeholder="Wiederstand1" />
    <br>
        <input type="text" name="number2" placeholder="Wiederstand2" />
    <br>
        <select name="form">
        <option value="reihe">Reihe</option>
        <option value="parallel">Parallel</option>
        </select>
    <button type="submit">Convert</button>
  </form>


<?php
    $numberOne = $_POST['number1'];
    $numberTwo = $_POST['number2'];
    $form = $_POST['form'];
    $resistancecalc = resistancecalculation($numberOne,$numberTwo,$form);
    function resistancecalculation($numberOne, $numberTwo, $form) {
        $resistancecalc = 0;
        if ($form == "reihe"){
            $resistancecalc=$numberOne + $numberTwo;
        return $resistancecalc;
        }
        elseif ($form == "parallel"){
            $resistancecalc=($numberOne * $numberTwo) / ($numberOne + $numberTwo);
            return $resistancecalc;
        }
    }
    echo resistancecalculation($numberOne,$numberTwo,$form);
?>
</body>
</html>
