<body style="background-color: rgb(184, 203, 224);">
<form method="post">
Unesite broj izvršenih pregleda: <input type="text" name="fnum"/><hr/>
Cena pojedinačnog pregleda: <input type="text" name="snum"/><hr/>	   		   
<input type="submit"  name="rez" value="Kompletna cena usluge za placanje u RSD"/>
</form>
</body>

<?php		
if(isset($_POST['rez']))
{
$x=$_POST['fnum'];		
$y=$_POST['snum'];				
$rez=$x*$y;		 
echo "Iznos:<input type='text' value='$rez'/>";		
}
?>
<div id="racun">
        <form action="" method="post">
        <br><input type="submit" value="Usluga plaćena, štampanje priznanice" name="racun" id="btn_racun">    
    </form>
</div>
<button class="button" onclick="history.back(-1)"> <<< Vrati se nazad </button>
