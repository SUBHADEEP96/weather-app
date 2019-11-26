<?php
error_reporting(0);

$get = json_decode(file_get_contents('http://ip.api.com/json/'),true);

date_default_timezone_set($get['timezone']);

$city = $_GET['city'];

$country = $_GET['country'];

$string ="http://api.openweathermap.org/data/2.5/weather?q=".$city.","."4464cd5dea6f549d09d5a0b3617f2a61";

$data = json_decode(file_get_contents($string),true);

$temp =$data['main']['temp'];


$icon =$data['weather'][0]['icon'];

$visibility=$data['visibility'];

$visibilitykm=$visibility/1000;

//$logo="<center> <img src="http://api.openweathermap.org/img/w/".$icon.".png"/></center>";

$desc="<b>description:<p>".$data['weather'][0]['description']."</p></b>";


$temerature="<b>temerature:".$temp."</b></br>";

$clouds="<b>clouds:".$data['clouds']['all']."</b><br>";

$humidity="<b>humidity".$data['main']['humidity']."</b><br>";

$windspeed="<b>windspeed".$data['wind']['speed']."</b><br>";

$pressure="<b>pressure: ".$data['main']['pressure']."</b></br>";

$visibility="<b>visibility:".$visibilitykm."km</b></br>";

$sunrise="<b>sunrise:".date('h:i A',$data['sys']['sunrise'])."</b><br>";

$sunset="<b>sunset:".date('h:i A',$data['sys']['sunset'])."</b>";














?>







<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Weather Report of <?php echo $_GET['city'];?></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
  </head>

  <body class="bg-primary">
  
<div class="container">
<div class="header clearfix">
<h1 class="text-white" style="font-family:cursive;color:purple">Weather App</h1>
<h4 class="text-white" style="font-family:cursive;">Weather Details of <?php echo $_GET['city'];?></h4>
</div><br>
 

<table class="table table-striped table-dark">
 <tr>
 <td>Temperature</td>
 <td><?php echo $temerature;?></td>
 </tr>
 <tr>
 <td>Clouds</td>
 <td><?php echo $clouds;?></td>
 </tr>
 <tr>
 <td>Humidity</td>
 <td><?php echo $humidity;?></td>
 </tr>
 <tr>
 <td>Wind Speed</td>
 <td><?php echo $windspeed;?></td>
 </tr>
 <tr>
 <td>Pressure</td>
 <td><?php echo $pressure;?></td>
 </tr>
 <tr>
 <td>Visibility</td>
 <td><?php echo $visibility;?></td>
 </tr>
 <tr>
 <td>Sunrise</td>
 <td><?php echo $sunrise;?></td>
 </tr>
 <tr>
 <td>Sunset</td>
 <td><?php echo $sunset;?></td>
 </tr>
 
 
</table>

</div> 


    <footer class="container">
     <p class="text-white">&copy;2019 developed by subhadeep paul</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
  </body>
</html>
