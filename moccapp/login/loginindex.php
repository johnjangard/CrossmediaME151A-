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

      if (isset ($_SESSION['loggedin']) && $_SESSION['loggedin']) {
        echo "Congratulations! You know about access control to a web site.";
        echo "<a href=\"logout.php\">Log out</a>";
}

    else {

      echo "You must <a href=\"login.php\">log in</a> first.";


    }
   ?>
    </body>
   </html>
