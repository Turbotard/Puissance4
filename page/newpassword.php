<?php 
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
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier mon mot de passe</title>
    <link rel="stylesheet" href="../css/newpassword.css">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
</head>
<body>
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
            <input class="mailInput" name="newpassword" type="password" placeholder="Nouveau mot de passe">
            <input class="mailInput" name="confirm" type="password" placeholder="Confirmer nouveau le mot de passe">
            <input class="btnConnect" name="submit" type="submit"  value="Valider">
        </form>
    </section>
    <?php
    require "../view/bouton.php";
    ?>
    
    <?php
    require "../view/footer.inc.php";
    ?>
</body>
</html>
