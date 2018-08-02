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

    <div class="grid-x">
        <div class="cell large-6">
         mapa
         
         <div id="map" style="width:400px;height:400px;background:yellow"></div>
         <script>
          function myMap() {
              var mapOptions = {
                  center: new google.maps.LatLng(51.5, -0.12),
                  zoom: 10,
                  mapTypeId: google.maps.MapTypeId.HYBRID
              }
          var map = new google.maps.Map(document.getElementById("map"), mapOptions);
          }
        </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
        </div>


        <div class="cell large-6">
        Adresa
        Telefon
        Radno vrijeme
        </div>
    </div>

<?php include_once "predlozak/podnozje.php" ?>
  </div>
  
   
    

   
    <?php include_once "predlozak/skripte.php" ?>
  </body>
</html>
