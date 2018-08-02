<?php include_once "../../konfiguracija.php" ;
if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "index.php");
}



if(isset($_POST["dodaj"])){
  $izraz = $veza->prepare("insert into vlasnik (ime,prezime,ulica_i_broj,mjesto,broj_mobitela,email,datum_rodjenja,oib,napomena) values
              (:ime,:prezime,:ulica_i_broj,:mjesto,:broj_mobitela,:email,:datum_rodjenja,:oib,:napomena)");
            
  unset($_POST["dodaj"]);
  $izraz->execute($_POST);
  header("location: index.php");
 
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

   <h3>Novi vlasnik</h3>
    <form class="callout text-center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">


      <div class="floated-label-wrapper">
        <label for="ime">Ime</label>
        <input  autocomplete="off" type="text" id="ime" name="ime" placeholder="Ime">
      </div>
      
      <div class="floated-label-wrapper">
        <label for="prezime">Prezime</label>
        <input  autocomplete="off" type="text" id="prezime" name="prezime" placeholder="Prezime" >
      </div>

      <div class="floated-label-wrapper">
        <label for="ulica_i_broj">Ulica i broj</label>
        <input  autocomplete="off" type="text" id="ulica_i_broj" name="ulica_i_broj" placeholder="Ulica i broj" >
      </div>

      <div class="floated-label-wrapper">
        <label for="mjesto">Mjesto</label>
        <input  autocomplete="off" type="text" id="mjesto" name="mjesto" placeholder="Mjesto" >
      </div>

      <div class="floated-label-wrapper">
        <label for="broj_mobitela">Broj mobitela</label>
        <input  autocomplete="off" type="text" id="broj_mobitela" name="broj_mobitela" placeholder="Broj mobitela" >
      </div>

      <div class="floated-label-wrapper">
        <label for="email">Email</label>
        <input  autocomplete="off"  type="text" id="email" name="email" placeholder="Email" >
      </div>

      <div class="floated-label-wrapper">
        <label for="datum_rodjenja">Datum rođenja</label>
        <input  autocomplete="off" type="date"id="datum_rodjenja" name="datum_rodjenja" placeholder="Datum rođenja" >
      </div>

      <div class="floated-label-wrapper">
        <label for="oib">Oib</label>
        <input  autocomplete="off" type="text" id="oib" name="oib" placeholder="Oib" >
      </div>

      <div class="floated-label-wrapper">
        <label for="napomena">Napomena</label>
        <input  autocomplete="off" type="text" id="napomena" name="napomena" placeholder="Napomena" >
      </div>

      
          
            
            
      <input class="button expanded" type="submit" name="dodaj" value="Dodaj novi">
    </form>
   <?php include_once "../../predlozak/podnozje.php" ?>
   <?php include_once "../../predlozak/skripte.php" ?>
 </body>
  

</html>
