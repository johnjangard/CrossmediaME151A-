<!DOCTYPE html>

<?php
//login
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

   if ($_POST ['username'] == "ag0512" && $_POST ['password'] == "gurka") {
     $_SESSION['loggedin']=true;
    ?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

    <title>
      MoccApp
    </title>
  </head>
  <body>
      <?php include 'imports/navbar.php';?>
      <?php }
      else {echo "Wrong username/password. Please return to <a href=\"login/login.php\">login page</a> and try again.";}
      ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
