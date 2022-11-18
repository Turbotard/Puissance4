<?php 
require "/Applications/MAMP/htdocs/Puissance4/view/header.inc.php";
require ('./includes/database.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier mon mot de passe</title>
    <link rel="stylesheet" href="newpassword.css">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="fond">
        <img id="back" src="fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
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
    require "/Applications/MAMP/htdocs/Puissance4/view/bouton.php";
    ?>
    
    <?php
    require "/Applications/MAMP/htdocs/Puissance4/view/footer.inc.php";
    ?>
</body>
</html>
