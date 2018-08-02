<?php
if(!isset($_POST["korisnik"])){
exit;
}

include_once "konfiguracija.php";

    if($_POST["korisnik"]===""){  // ako nije ništa upisano ???
        header("location: prijava.php?poruka=2");
        exit;
    }

    if(($_POST["korisnik"]==="tjakopec" && $_POST["lozinka"]==="t")
    ||
    ($_POST["korisnik"]==="edunova" && $_POST["lozinka"]==="e")
    ||
    ($_POST["korisnik"]==="1" && $_POST["lozinka"]==="1")
    ){
        //pusti dalje
        $_SESSION[$idAPP."o"]= $_POST["korisnik"];
        header("location: privatno/nadzornaPloca.php"); 
    }else{
        header("location: prijava.php"); 
    }
