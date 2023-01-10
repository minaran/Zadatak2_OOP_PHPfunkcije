<header>
    <div id="korisnik_info">
        <h3>
            <?php
            echo $korisnik->getTip().": ";
            echo $korisnik->getIme()." ";
            echo $korisnik->getPrezime();
            ?>
        </h3>
    </div>
    <div id="logout">
        <form action="" method="post">
            <input type="submit" value="Logout" name="logout" id="btn_logout">
        </form>
    </div>
</header>

<?php
    if(isset($_POST["logout"])){
    unset($_SESSION["logovani_korisnik"]);
    header("Location: .");
    }

// header smo inkorporirali kod svih korisnika
?>