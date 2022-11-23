<?php
require_once('../includes/database.inc.php'); 

if(isset($_POST['submit']))
{
   $pseudo = $_POST['pseudo'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $password_retype = $_POST['password_retype'];
   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    
            if($password_retype == $password){
                $sth = $dbh->prepare("INSERT INTO utilisateur (email, mdp, pseudo, date_heure_inscr, date_heure_last) VALUES (?, ?, ?, NOW(), NOW())");
                $sth->execute([$email, $password, $pseudo]);
                $data = $sth->fetch();
                header('Location:./connexion.php');

}}
}

$pageTitle = "Inscription";
$cssFileName = "../css/inscription.css";
include "../view/header.inc.php";

?>



<img id="back" src="../image/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
<div id="entree">
        <h1 class="slogan1"><stronger> INSCRIPTION</stronger></h1>
        </div>
    <section class="login">
        <div class="logs">
            <?php
            if(isset($_GET['login_err']))
            {
                $err = htmlspecialchars($_GET['login_err']);
                switch($err)
                {
                    case 'success':
            ?>
                    <div class="alert alert-danger">
                        <strong>Succès</strong> inscription réussie ! 
                    </div>
            <?php
                break;
                }
            }
            ?>
            <form method="post">
                <input class="mailInput" type="email" name="email" placeholder="Email">
                <input class="mailInput" type="username" name="pseudo" placeholder="Pseudo" minlength="4">
                
                <div class="input-group">
                    <input type="password" class="mailInput" placeholder="Mot de passe" name="password" minlength="8">
                </div>
                <p>Le mot de passe doit contenir: <br> -8 caractères minimum <br> -Une majuscule <br> -Un chiffre <br> -Un caractère spécial<br> </p>
                <h5> Sécurité du mot de passe</h5>
                <div class="progress">
                    <div class="bar">
                    </div>
                </div>
                <input class="mailInput" type="password" name="password_retype" placeholder="Confirmer le mot de passe">
                <input class="btnConnect" type="submit" name="submit" value="S'inscrire">
            </form>
        </div>

    </section>
    <?php
    require "../view/bouton.php";
    ?>

    <?php 
        include "../view/footer.inc.php";
    ?>


    


