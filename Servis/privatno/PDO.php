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

Ovo je PDO
  <div class="grid-x">
    <div class="cell large-6">
    
      <?php

      $izraz = $veza->prepare("select * from radionica");
      $izraz->execute();
      $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
      
     
      echo "<pre>";
      print_r($rezultati);
      echo "</pre>";
      ?>
    </div>
    <div class="cell large-6">
      <?php

      $izraz = $veza->prepare("select * from vlasnik");
      $izraz->execute();
      $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
      
      echo "<pre>";
      print_r($rezultati);
      echo "</pre>";
      ?>
    </div> 
  </div>
  
    
    

   <?php include_once "../predlozak/podnozje.php" ?>
   </div>
  <?php include_once "../predlozak/skripte.php" ?>
  </body>
  

</html>

