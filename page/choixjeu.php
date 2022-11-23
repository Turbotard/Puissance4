<?php 
require("../view/header.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix du jeu</title>
    <link rel="stylesheet" href="../css/choixjeu.css">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="fond">
    <img id="back" src="../image/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
    <div id="opaque">
        <div id="boxe">
            <div id="entree">
                <h1 class="slogan3"><stronger> CHOIX DU JEU</stronger></h1>
            </div>
            </div>
        </div>
    </div>
    <p><span id = "theme"> Je choisi le thème </span>
    <div class="telephone">
    <section class="deroule">
        <ul>
            <li class="deroulant"><a class="menu" href="myaccount.php">Profil</a>
                <ul class="sous">
                    <li><a class="menu" href="newprofil.php">Modifier mon profil</a></li>
                    <li><a class="menu" href="newmail.php">Modifier mon adresse mail</a></li>
                    <li><a class="menu" href="newpassword.php">Modifier mon mot de passe</a></li>
                    <li><a class="menu" href="deconnexion.php">Déconnexion</a></li>
                </ul>
            </li>
        </ul>
    </section>
    </p>
</div>


    
    <?php
    require "../view/bouton.php";
    ?>
</body>
</html>
<?php
require "../view/footer.inc.php";
?>