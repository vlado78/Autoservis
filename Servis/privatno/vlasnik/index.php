<?php include_once "../../konfiguracija.php" ;
if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "index.php");
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


<br>

<a href="novi.php" class="success button expanded">Dodaj novog  vlasnika</a>
  


 <?php
 
 $izraz = $veza->prepare("
 
 select 
a.sifra,a.ime,a.prezime,a.ulica_i_broj,a.mjesto,a.broj_mobitela,a.email,a.datum_rodjenja,a.oib,a.napomena,
 count(b.sifra) as vozila
 from vlasnik a left join vozilo b
 on a.sifra=b.vlasnik 
group by
a.sifra,a.ime,a.prezime,a.ulica_i_broj,a.mjesto,a.broj_mobitela,a.email,a.datum_rodjenja,a.oib,a.napomena
 ");


 $izraz->execute();
 $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
 

 ?>


  
  <div class="cell large-6">
    <table>
      <thead>
        <tr>
          <th>Ime</th>
          <th>Prezime</th>
          <th>Ulica i broj</th>
          <th>Mjesto</th>
          <th>Broj mobitela</th>
          <th>e-mail</th>
          <th>Datum rođenja</th>
          <th>OIB</th>
          <th>Napomena</th>
          <th>Akcija</th>
        </tr>
      </thead>
    <tbody>
    <?php foreach($rezultati as $red):?>
      <tr>
        <td><?php echo $red->ime; ?></td>
        <td><?php echo $red->prezime; ?></td>
        <td><?php echo $red->ulica_i_broj; ?></td>
        <td><?php echo $red->mjesto; ?></td>
        <td><?php echo $red->broj_mobitela; ?></td>
        <td><?php echo $red->email; ?></td>
        <td><?php echo $red->datum_rodjenja; ?></td>
        <td><?php echo $red->oib; ?></td>
        <td><?php echo $red->napomena; ?></td>
        <td>
            <a href="promjena.php?sifra=<?php echo $red->sifra; ?>">
            <i class="fas fa-edit fa-2x"></i> 
            </a> 
            <?php if($red->vozila==0): ?>
				    <a onclick="return confirm('Sigurno obrisati <?php echo $red->naziv ?>')" href="obrisi.php?sifra=<?php echo $red->sifra; ?>">
				    <i class="fas fa-trash fa-2x" style="color: red;"></i>
            </a> 
            <?php endif;?>
           
        </td>
      </tr>
      
      
    <?php endforeach;?>
    </tbody>
    </table>
  </div>
  
  


  
    
    

   <?php include_once "../../predlozak/podnozje.php" ?>
  <?php include_once "../../predlozak/skripte.php" ?>
  </body>
  

</html>
