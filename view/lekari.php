<body style="background: linear-gradient(to top, #00ccff 0%, #0099cc 100%);">

<?php
echo "<br> U tabeli se nalaze zakazani pregledi i imena pacijenata:";
?>
<hr>

<?php
$pregledi = $_SESSION["pregledi"];
$zakazanipregledi = [];

foreach($pregledi as $pr){
    if($pr->getStatusPregleda()==$korisnik->getStatus()){
        array_push($zakazanipregledi, $pr);
    }
}
Kontroler::prikaziTabelu($zakazanipregledi,["Pacijent", "Datum i vreme","Tip pregleda","Dijagnoza","Određivanje terapije"]);
?>

<hr>
<div>
<button class="button" onclick="window.location.href='app/index_orl.php'">Određivanje terapije ORL</button>
<button class="button" onclick="window.location.href='app/index_o.php'">Određivanje terapije Oftamolog</button>
<button class="button" onclick="window.location.href='app/index_fv.php'">Određivanje terapije Fizijatar</button> 
</div>
<hr>

//moguć je prikaz u vidu niza<?php 
// prikaz u vidu niza
//foreach($zakazanipregledi as $preg){
//echo "<br>";
//print_r($preg->konvertujUNiz()); };
?>

<br><div id="stampa">
        <form action="" method="post">
        <br><input type="submit" value="Štampanje izveštaja" name="stampa" id="btn_stampa">
        </form>
</div>

<br><form action="" method="post" id="zakazivanjePregleda">
  <div class = "termin">
  <div class="termin_lekar"><input type="text" style="border: 1px solid black" name="ime" placeholder="ime*" value="" /></div>
  <div class="termin_lekar"><input type="text" style="border: 1px solid black" name="prezime" placeholder="prezime*" value="" /></div>
  <div class="termin_lekar"><input type="text" style="border: 1px solid black" name="datum" placeholder="datum*" value="" /></div>
  </div>
  <input type="submit" value="Zakaži pregled" >
</form>
