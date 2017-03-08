
<?php
session_start();
session_destroy();
?>

<?php error_reporting(E_ALL);
ini_set('display_errors', 1);
 ?>

 <!DOCTYPE HTML>
 <html>
 <head>
   <title></title>
   <meta charset='utf-8'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="css/custom.css">
 </head>
 <body>
   <h1>Session example</h1>



<div class="flexcontainer">
 <?php
  echo "Du är nu utloggad!";
  echo "<br>";
?>
 <a href="http://ddwap.mah.se/ag0512/moccapp/login/login.php"><button type="button">Logga in igen</button></a><br>
 <a href="http://ddwap.mah.se/ag0512/moccapp/index.php"><button type="button">Fortsätt utan att logga in</button></a>
 </body>
 </div>
</html>
