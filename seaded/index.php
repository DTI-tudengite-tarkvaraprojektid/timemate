<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="../images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css">
    <title>Seaded</title>
  </head>
  <body>
    <?php include('../nav-bar.php'); ?>
    <div class="links">
        <a href="../statistika/" class="page"> Statistika</a>
        <a href="../aine/" class="page" >Aine</a>
        <a href="../kalender/" class="page">Kalender</a>
        <a href="../seaded/" class="page" id="chosen"> Seaded</a>

    </div>
    
  </body>
</html>