<?PHP
require ('./includes/database.inc.php');
session_start();
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
        header('location: .site.php');
        mail($email,$sujet,$message." vous nous avez demandez de l'aide");
        imap_mail($email,$sujet,$message." vous nous avez demandez de l'aide");
}}
?>
<?php
require "/Applications/MAMP/htdocs/Puissance4/view/header.inc.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aled</title>
    <link rel="stylesheet" href="aled.css">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
</head>
<body>
<img id="back" src="fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
        <div id="opaque">
<div id="entree">
        <h1 class="slogan3"><stronger> ALED</stronger></h1>
        </div>
</div>

    <div class="telephone">
        <div class="contact">
            <p class="aya"><img class ="logo" src="telephone.png"><span class="text">07 83 49 44 12</span></p>
            <p class="aya"><img class="logo" src="mail.png"><span class="text">aya.aidouni@edu.esiee-it.fr</span></p>
            <p class="aya"><img class="logo" src="localisation.png"><span class="text">chez Aya</span></p>
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


    
</body>
</html>
<?php
require "/Applications/MAMP/htdocs/Puissance4/view/footer.inc.php";
?>