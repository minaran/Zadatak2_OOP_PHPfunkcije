<?php
include "controler/controler.php";
include "podaci.php";
include "model/static.php";

if(!isset($_SESSION["logovani_korisnik"])){
    header("Location: view/login.php");
}else{
    $korisnik = $_SESSION["logovani_korisnik"];
    include "view/header.php";
    if($korisnik->getTip()=="lekar"){
        include "view/lekari.php";
        exit();
    }else if($korisnik->getTip()=="pacijent"){
        include "view/pacijenti.php";
        exit();
    }else if($korisnik->getTip()=="administrator"){
        include "view/administrator.php";
        exit();
    }else{
        echo "Error 404";
        exit();
    }
}
?>