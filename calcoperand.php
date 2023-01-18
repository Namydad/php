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
    <input type="text" name="number1" placeholder="Enter a Number" />
    <br>
    <input type="text" name="number2" placeholder="Enter a Number" />
    <br>
    <button type="submit">Convert</button>
  </form>

<?php
    $numberOne = $_POST['number1'];
    $numberTwo = $_POST['number2'];
    function plus($numberOne, $numberTwo) {
      $erg = $numberOne + $numberTwo;
      return $erg;
    }
    
    function minus($numberOne, $numberTwo) {
      $erg = $numberOne - $numberTwo;
      return $erg;
    }
    
    function mul($numberOne, $numberTwo) {
      $erg = $numberOne * $numberTwo;
      return $erg;
    }
    
    function div($numberOne, $numberTwo) {
      $erg = $numberOne / $numberTwo;
      return $erg;
    }
    
    function absolut($numberOne) {
      if($numberOne < 0 ){
      return $numberOne * -1;
      } else {
      return $numberOne;
      }
    }
    
    
/*   echo plus(13,50), '<br>';
    
    echo minus(13,50), '<br>';
    echo minus(50,13), '<br>';
    
    echo mul(13,50), '<br>';
    echo mul(50,13), '<br>';
    
    echo div(13,50), '<br>';
    echo div(50,13), '<br>';
    
    echo absolut(50), '<br>';
    echo absolut(-50), '<br>';
*/

    
?>
</body>
</html>
