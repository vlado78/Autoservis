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
<h3>Radionice</h3>

<a href="novi.php" class="success button expanded">Dodaj novu radionicu</a>

  


 <?php
 
 $izraz = $veza->prepare("select
							r.*
							,(select count(*) from radni_nalog rn where r.sifra=rn.radionica) as num_of_rn
							,(select count(*) from zaposlenik z where r.sifra=z.radionica) as num_of_zaposlenika
							,case
							when ((select count(*) from radni_nalog rn where r.sifra=rn.radionica)>0 or (select count(*) from zaposlenik z where r.sifra=z.radionica)>0)then 0
							else 1
							end as flag_to_delete
							from
							radionica r;"); 
 $izraz->execute();
 $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
 

 ?>


  
  <div class="cell large-6">
    <table>
      <thead>
        <tr>
          <th>Naziv</th>
          <th>Datum osnutka</th>
          <th>Akcija</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($rezultati as $red):?>
        <tr>
        <td><?php echo $red->naziv; ?></td>
        <td><?php echo $red->datum_osnutka; ?></td>
        <td>
            <a href="promjena.php?sifra=<?php echo $red->sifra; ?>">
            <i class="fas fa-edit fa-2x"></i> 
            </a>
            <?php if($red->flag_to_delete!=0): ?>
				    <a onclick="return confirm('Sigurno obrisati <?php echo $red->naziv ?>')" href="obrisi.php?sifra=<?php echo $red->sifra; ?>">
				    <i class="fas fa-trash fa-2x" style="color: red;"></i>
				    </a>
			<?php endif;?>
          
            
          
            </td>
        </tr>
        
        </tr>
      <?php endforeach;?>
      </tbody>
    </table>
  </div>
  
  


  
    
    

   <?php include_once "../../predlozak/podnozje.php" ?>
  <?php include_once "../../predlozak/skripte.php" ?>
  </body>
  

</html>
