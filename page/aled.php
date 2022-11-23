<?PHP
require ('../includes/database.inc.php');
$error = 0;
if(isset($_POST['email'])){
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $nom =$_POST['nom'];
    $email = $_POST['email'];
    $sujet =$_POST['sujet'];
    $message =$_POST['message'];
    $sth = $dbh('SELECT * FROM utilisateur WHERE email = :email');
    $sth->execute(['email'=>$email]);
    $donnes = $sth->fetch();
    if($donnes == ''){
        $error = 1;
    }
    else
        header('location: ./site.php');
        mail($email,$sujet,$message." vous nous avez demandez de l'aide");
        imap_mail($email,$sujet,$message." vous nous avez demandez de l'aide");
}}
?>
<?php
$pageTitle = "Aled";
$cssFileName = "../css/aled.css";
require "../view/header.inc.php";

?>

<img id="back" src="../image/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
        <div id="opaque">
<div id="entree">
        <h1 class="slogan3"><stronger> ALED</stronger></h1>
        </div>
</div>

    <div class="telephone">
        <div class="contact">
            <p class="aya"><img class ="logo" src="../image/telephone.png"><span class="text">07 83 49 44 12</span></p>
            <p class="aya"><img class="logo" src="../image/mail.png"><span class="text">aya.aidouni@edu.esiee-it.fr</span></p>
            <p class="aya"><img class="logo" src="../image/localisation.png"><span class="text">chez Aya</span></p>
        </div>
    </div>

    <div class="formulaire">
    <form>
        <input type="text" name="nom" id="nom" placeholder="Nom" class="nom">
        <input type="email" name="email" id="email" placeholder="Email" class="mail">
        <input type="text" name="sujet" id="sujet" placeholder="Sujet"class="sujet" >
        <input type="text" name="message" id="message" placeholder="Message" class="msg">
        <input class="bouton" type="submit" name="aled" value="Envoyer">
    </form>
    </div>
    <?php
    require "../view/bouton.php";
    ?>

<?php
require "../view/footer.inc.php";
?>