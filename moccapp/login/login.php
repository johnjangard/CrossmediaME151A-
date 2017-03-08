<?php
session_start();
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
   <link rel="stylesheet" href="../css/custom.css">
 </head>
 <body>


     <div class="flexcontainer">
        <h2>MoccApp</h2>
        <form method="post" action="../index.php">
          <input class="flexitem" type="text" name="username" value="example@email.com"/><br>
          <input class="flexitem" type="password" name="password" value="password"/><br>
          <input class="flexitem-login" type="submit" value="login" name="send"/>
        </form>
    </div>
    <?php


   ?>
    </body>
   </html>
