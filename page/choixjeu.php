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
    <h2 id="theme">Je choisi le thème</h2>
    <div class="telephone">
    <section class="deroule">
        <ul>
            <li class="deroulant"><a class="menu" href="myaccount.php">thème</a>
                <ul class="sous">
                    <li><a class="menu" href="newprofil.php">jeux vidéos</a></li>
                    <li><a class="menu" href="newmail.php">animaux</a></li>
                    <li><a class="menu" href="newpassword.php">NASA</a></li>
                </ul>
            </li>
        </ul>
    </section>
</div>
<h2 id="theme">Je choisi la difficulté</h2>
    <div class="telephone2">
    <section class="deroule2">
        <ul>
            <li class="deroulant2"><a class="menu2" href="myaccount.php">difficulté</a>
                <ul class="sous2">
                    <li><a class="menu2" href="newprofil.php">baby</a></li>
                    <li><a class="menu2" href="newmail.php">human</a></li>
                    <li><a class="menu2" href="newpassword.php">god</a></li>
                </ul>
            </li>
        </ul>
    </section>
</div>


    
    <?php
    require "../view/bouton.php";
    ?>
</body>
</html>
<?php
require "../view/footer.inc.php";
?>