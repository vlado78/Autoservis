<?php include_once "konfiguracija.php" ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "predlozak/head.php" ?>
  </head>
  <body>
  <div class="grid-container">

     <?php include_once "predlozak/zaglavlje.php" ?>
     <?php include_once "predlozak/navbar.php" ?>

    <div class="grid-x grid-padding-x ">
      <div class="large-4 cell text-center">
     <form class="callout text-center" action="autoriziraj.php" method="post">
  <h2>Prijavite se</h2>
  <div class="floated-label-wrapper">
    <label for="full-name">Korisničko ime</label>
    <input autocomplete="off" type="text" id="korisnik" name="korisnik" placeholder="Ovdje upišite svoje korisničko ime">
  </div>

  <div class="floated-label-wrapper">
    <label for="pass">Lozinka</label>
    <input autocomplete="off" type="password" id="lozinka" name="lozinka" placeholder="Ovdje upišite svoju lozinku">
  </div>
  <input class="button expanded" type="submit" value="Prijavi se">
  </div>
    </div>
</form>




     
   


<?php include_once "predlozak/podnozje.php" ?>
   ovo je stranica prijave
  </div>
  
    
 

   
    <?php include_once "predlozak/skripte.php" ?>
  </body>
</html>
