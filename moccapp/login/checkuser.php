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
 </head>
 <body>
   <h1>Session example</h1>


    <?php
      if ($_POST ['username'] == "moccapp@gmail.com" && $_POST ['password'] == "gurka") {$_SESSION['loggedin']=true;}
      else {echo "Wrong username/password. Please return to <a href=\"login.php\">login page</a> and try again.";}
    ?>
    </body>
   </html>
