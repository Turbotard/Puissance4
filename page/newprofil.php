<?php 
$pageTitle = "Nouveau Profil";
$cssFileName = "../css/newprofil.css";
require "../view/header.inc.php";
require_once ('../includes/database.inc.php');
?>

<div id="fond">
        <img id="back" src="../image/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
        <div id="opaque">
        <div id="boxe">
        <div id="entree"> 
        <h1 class="slogan3"><stronger>MODIFIER MON PSEUDO</stronger></h1>
        </div>
        </div>
        </div>
        
    <section class="newpassword">
        <h3 class="slogan2"><stronger> Changer le pseudo</stronger></h3>
        <div class="password">
            <input class="mailInput" type="password" placeholder="Ancien pseudo">
            <input class="mailInput" type="password" placeholder="Nouveau pseudo">
            <input class="mailInput" type="password" placeholder="Confirmer nouveau le nouveau pseudo">
            <input class="btnConnect" type="submit" name="newmail" value="Valider">
        </div>
    </section>
    <?php
    require "../view/bouton.php";
    ?>
    
    <?php
    require "../view/footer.inc.php";
    ?>

