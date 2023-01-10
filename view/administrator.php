<body style="background: linear-gradient(to top, #66ccff 0%, #009999 100%);;">
<div id="stampa">
        <form action="" method="post">
        <input type="submit" value="Štampanje izveštaja" name="stampa" id="btn_stampa">
        </form>
        
        <button class="button" onclick="window.location.href='utility/racun.php'">Obračun plaćanja</button>   
</div>

<?php
echo "Ovde možete pristupiti listi lekara i listi pacijenata:";
?>

<hr>
<form action="" method="post">
<input type="submit" value="Prikaži spisak lekara" >

<select name="spisakLekara" id="prikaziLekare" name="prikaziLekare">
  <option value="orl" selected>ORL</option>
  <option value="ocni" >Oftamologija</option>
  <option value="fizijatar" >Fizijatar</option>
</select>
</form>

<form action="" method="post" id="dodavanjeLekara">
  <div class = "lekar">
  <div class="red_lekar"><input type="text" style="border: 1px solid black" name="ime" placeholder="ime*" value="" /></div>
  <div class="red_lekar"><input type="text" style="border: 1px solid black" name="prezime" placeholder="prezime*" value="" /></div>
  <div class="red_lekar"><input type="text" style="border: 1px solid black" name="email" placeholder="email*" value="" /></div>
  <div class="red_lekar"><input type="text" style="border: 1px solid black" name="sifra" placeholder="sifra*" value="" /></div>
  <div class="red_lekar"><input type="text" style="border: 1px solid black" name="jmbg" placeholder="jmbg*" value="" /></div>
  <div class="red_lekar"><input type="text" style="border: 1px solid black" name="telefon" placeholder="telefon*" value="" /></div>
  <div class="red_lekar"><input type="text" style="border: 1px solid black" name="tip" placeholder="tip*" value="" /></div>
  </div>
  <input type="submit" value="Dodaj lekara" >
</form>


<hr>
<form action="" method="post">
<input type="submit" value="Prikaži spisak pacijenata" id="prikaziPacijente" name="prikaziPacijente">
</form>

<form action="" method="post">
<div class = "pacijent">
  <div class="red_pacijent"><input type="text" style="border: 1px solid black" name="ime" placeholder="ime*" value="" /></div>
  <div class="red_pacijent"><input type="text" style="border: 1px solid black" name="prezime" placeholder="prezime*" value="" /></div>
  <div class="red_pacijent"><input type="text" style="border: 1px solid black" name="email" placeholder="email*" value="" /></div>
  <div class="red_pacijent"><input type="text" style="border: 1px solid black" name="sifra" placeholder="sifra*" value="" /></div>
  <div class="red_pacijent"><input type="text" style="border: 1px solid black" name="jmbg" placeholder="jmbg*" value="" /></div>
  <div class="red_pacijent"><input type="text" style="border: 1px solid black" name="telefon" placeholder="telefon*" value="" /></div>
  <div class="red_pacijent"><input type="text" style="border: 1px solid black" name="tip" placeholder="tip*" value="" /></div>
  </div>
  <input type="submit" value="Dodaj pacijenta" id="dodajPacijenta" name="dodajPacijenta">
</form>



