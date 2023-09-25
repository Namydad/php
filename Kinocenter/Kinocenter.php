<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cinema-Lammer</title>
        <style>
            .container {
                    background: linear-gradient(
                                                    to bottom,
                                                    rgba(153, 6, 26, 0.774),
                                                    rgba(15, 114, 101, 0.877)
                                                );
                    background-repeat: round space;
                }
            *{
                color: aliceblue;
            }
        </style>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center" style="background-color: black; color: white;">
            <h1>Welcome to your regional Cinema-Lammer</h1>
            <br>
            <h2>Watch your latest Movies and Classics at Cinema-Lammer!</h2>
            <br>
            <div style="font-weight: bold; font-size:large;">
            <?php
              echo "Current Programm Date " . date("Y/m/d") . "<br>";
              ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <h3>Movies</h3>
                <p>You can find our current Movie selection listed below! Normal viewing times start at 6pm EST</p>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Theatre</th>
                        <th>Movie Title</th>
                        <th>Time in Minutes</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Avatar: The Way of Water</td>
                        <td>210</td>
                      </tr>      
                      <tr class="danger">
                        <td>2</td>
                        <td>One Piece Film: Red!</td>
                        <td>120</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Air</td>
                        <td>127</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Barbie</td>
                        <td>101</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>The Wizard of Oz</td>
                        <td>102</td>
                      </tr>
                      <tr>
                        <td>12</td>
                        <td>The Godfather</td>
                        <td>175</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
        </div>
    </body>
</html>