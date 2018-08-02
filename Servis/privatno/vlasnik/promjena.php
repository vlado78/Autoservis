<?php include_once "../../konfiguracija.php" ;
if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "index.php");
}

if(!isset($_GET["sifra"]) && !isset($_POST["sifra"])){
  header("location: " . $putanjaAPP . "index.php");
}

if(isset($_POST["promjeni"])){
  $izraz = $veza->prepare("update vlasnik set 
              ime=:ime, 
              prezime=:prezime, 
              ulica_i_broj=:ulica_i_broj, 
              mjesto=:mjesto, 
              broj_mobitela=:broj_mobitela, 
              email=:email, 
              datum_rodjenja=:datum_rodjenja, 
              oib=:oib, 
              napomena=:napomena
              where sifra=:sifra;");
              
  unset($_POST["promjeni"]);
  $izraz->execute($_POST);
  header("location: index.php");
}else{
  $izraz = $veza->prepare("select * from vlasnik where sifra=:sifra");
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
  <h3>Promijeni vlasnika</h3>
  <form class="callout text-center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    
    <div class="floated-label-wrapper">
      <label for="ime">Ime</label>
      <input value="<?php echo $o->ime ?>" autocomplete="off" type="text" id="ime" name="ime" placeholder="Ime">
    </div>
    
    <div class="floated-label-wrapper">
      <label for="prezime">Prezime</label>
      <input value="<?php echo $o->prezime ?>" autocomplete="off" type="text" id="prezime" name="prezime" placeholder="Prezime" >
    </div>

    <div class="floated-label-wrapper">
      <label for="ulica_i_broj">Ulica i broj</label>
      <input value="<?php echo $o->ulica_i_broj ?>" autocomplete="off" type="text" id="ulica_i_broj" name="ulica_i_broj" placeholder="Ulica i broj" >
    </div>

    <div class="floated-label-wrapper">
      <label for="mjesto">Mjesto</label>
      <input value="<?php echo $o->mjesto ?>" autocomplete="off" type="text" id="mjesto" name="mjesto" placeholder="Mjesto" >
    </div>

    

    <div class="floated-label-wrapper">
      <label for="broj_mobitela">Broj mobitela</label>
      <input value="<?php echo $o->broj_mobitela ?>" autocomplete="off" type="text" id="broj_mobitela" name="broj_mobitela" placeholder="Broj mobitela" >
    </div>

    <div class="floated-label-wrapper">
      <label for="email">Email</label>
      <input value="<?php echo $o->email ?>" autocomplete="off" type="text" id="email" name="email" placeholder="Email" >
    </div>

    <div class="floated-label-wrapper">
      <label for="datum_rodjenja">Datum rođenja</label>
      <input value="<?php echo $o->datum_rodjenja ?>" autocomplete="off" type="date" id="datum_rodjenja" name="datum_rodjenja" placeholder="Datum rođenja" >
    </div>

    <div class="floated-label-wrapper">
      <label for="oib">Oib</label>
      <input value="<?php echo $o->oib ?>" autocomplete="off" id="oib" type="text" name="oib" placeholder="Oib" >
    </div>

    <div class="floated-label-wrapper">
      <label for="napomena">Napomena</label>
      <input value="<?php echo $o->napomena ?>" autocomplete="off" id="napomena" name="napomena" placeholder="Napomena" >
    </div>


    
    <input type="hidden" name="sifra" value="<?php echo $o->sifra ?>" />
    <input class="button expanded" type="submit" name="promjeni" value="Promjeni">
  </form>
  
    

  <?php include_once "../../predlozak/podnozje.php" ?>
  <?php include_once "../../predlozak/skripte.php" ?>
  </div>
  </body>
  

</html>
