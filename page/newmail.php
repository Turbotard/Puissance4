<?php 
$pageTitle = "Modifier mon mail";
$cssFileName = "../css/newmail.css";
require "../view/header.inc.php";
require_once ('../includes/database.inc.php');



$error = 0;
if(isset($_POST['submit']))
{

    $oldmail = $_POST['oldmail'];
    $newmail = $_POST['newmail'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if($confirmpassword == $password){
        $sth = $dbh->prepare('UPDATE utilisateur SET email = ? WHERE email = ? AND mdp = ?');
        $sth->execute([$newmail, $oldmail, $password]);
        $donnees = $sth->fetch();    
    }
}

?>

    <div id="fond">
        <img id="back" src="../image/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
        <div id="opaque">
        <div id="boxe">
        <div id="entree">       
            <h1 class="slogan3"><stronger> MODIFIER MON ADRESSE MAIL</stronger></h1>
        </div>
        </div>
        </div>
    <section class="nmail">
        <h3 class="slogan2"><stronger> Changer l'adresse mail</stronger></h3>
    <form method="post" class="mail">
        <input class="mailInput" name="oldmail" type="email" placeholder="Ancien email">
        <input class="mailInput" name="newmail"type="email" placeholder="Nouvel email">
        <input class="mailInput" name="password"type="password" placeholder="Mot de passe">
        <input class="mailInput" name="confirmpassword"type="password" placeholder="Confirmer le mot de passe">
        <input class="btnConnect" type="submit" name="submit" value="Valider">
    </form>
    </div>
    </section>
    <?php
    require "../view/bouton.php";
    ?>

<?php
require "../view/footer.inc.php";
?>