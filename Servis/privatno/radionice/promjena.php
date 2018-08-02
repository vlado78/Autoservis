<?php include_once "../../konfiguracija.php" ;
if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "index.php");
}

if(!isset($_GET["sifra"]) && !isset($_POST["sifra"])){
  header("location: " . $putanjaAPP . "index.php");
}






if(isset($_POST["promjeni"])){
  $izraz = $veza->prepare("update radionica set 
              naziv=:naziv, 
							datum_osnutka=:datum_osnutka
              where sifra=:sifra;");
              
  unset($_POST["promjeni"]);
  $izraz->execute($_POST);
  header("location: index.php");
}else{
  $izraz = $veza->prepare("select * from radionica where sifra=:sifra");
  $izraz->execute($_GET);
  $o=$izraz->fetch(PDO::FETCH_OBJ);
}
?>







<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "../../predlozak/head.php" ?>
  </head>
  <body>

  <div class="grid-container">

    <?php include_once "../../predlozak/zaglavlje.php" ?>
    <?php include_once "../../predlozak/navbar.php" ?>
    <h3>Promijeni radionicu</h3>
      <form class="callout text-center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        
        <div class="floated-label-wrapper">
          <label for="naziv">Ime radionice</label>
          <input value="<?php echo $o->naziv ?>" autocomplete="off" type="text" id="naziv" name="naziv" placeholder="Ime radionice">
        </div>
        
        <div class="floated-label-wrapper">
          <label for="datum_osnutka">Datum osnutka</label>
          <input value="<?php echo $o->datum_osnutka ?>" type="date" autocomplete="off" id="datum_osnutka" name="datum_osnutka" placeholder="Datum osnutka" >
        </div>

        
        
        <input type="hidden" name="sifra" value="<?php echo $o->sifra ?>" />
        <input class="button expanded" type="submit" name="promjeni" value="Promjeni">
      </form>
      

    <?php include_once "../../predlozak/podnozje.php" ?>
    <?php include_once "../../predlozak/skripte.php" ?>
  </div>
  </body>
  

</html>
