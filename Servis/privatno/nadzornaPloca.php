<?php include_once "../konfiguracija.php" ;
if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "index.php");
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "../predlozak/head.php" ?>
  </head>
  <body>
  <div class="grid-container">

     <?php include_once "../predlozak/zaglavlje.php" ?>
     <?php include_once "../predlozak/navbar.php" ?>

Ovo je nadzorna ploča

 <?php include_once "../predlozak/podnozje.php" ?>
  </div>
  
    
    

   <?php include_once "../predlozak/podnozje.php" ?>
  <?php include_once "../predlozak/skripte.php" ?>
  </body>
  

</html>
