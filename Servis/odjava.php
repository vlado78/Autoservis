<?php 
include_once "konfiguracija.php" ;
unset($_SESSION[$idAPP . "o"]);
header("location: index.php");
