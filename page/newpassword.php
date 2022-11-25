<?php 
$pageTitle = "Modifier mon mot de passe";
$cssFileName = "../css/newpassword.css";
require "../view/header.inc.php";
require_once ('../includes/database.inc.php');


$error = 0;
if(isset($_POST['submit']))
{

    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $confirm = $_POST['confirm'];

    if($confirm == $newpassword){
        $sth = $dbh->prepare('UPDATE utilisateur SET mdp = ? WHERE mdp = ?');
        $sth->execute([$newpassword, $oldpassword]);
        $donnees = $sth->fetch();    
    }
}
?>

<div id="fond">
        <img id="back" src="../image/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
        <div id="opaque">
        <div id="boxe">
        <div id="entree"> 
        <h1 class="slogan3"><stronger>MODIFIER MON MOT DE PASSE</stronger></h1>
        </div>
        </div>
        </div>
        
    <section class="newpassword">
        <h3 class="slogan2"><stronger> Changer le mot de passe</stronger></h3>
        <form method="post" class="password">
            <input class="mailInput" name="oldpassword" type="password" placeholder="Ancien mot de passe">
            <div class="input-group">
                    <input type="password" class="mailInput" id="password" placeholder="Nouveau Mot de passe" name="newpassword">
                </div>
                
                <h5> Sécurité du mot de passe</h5>
                <div class="progress">
                    <div class="bar">
                    </div>
                </div>
            <input class="mailInput" name="confirm" type="password" placeholder="Confirmer nouveau le mot de passe">
            <input class="btnConnect" name="submit" type="submit"  value="Valider">
        </form>
    </section>
    <script src="../js/newpassword.js">
    <?php
    require "../view/bouton.php";
    ?>
    
    <?php
    require "../view/footer.inc.php";
    ?>

