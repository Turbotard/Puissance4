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
<body onload="init()">
    <div id="fond">
    <img id="back" src="../image/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
    <div id="opaque">
        <div id="boxe">
            <div id="entree">
            <div id="opaque">
                <h1 class="slogan3"><stronger> CHOIX DU JEU</stronger></h1>
            </div>
            </div>
            </div>
        </div>
    </div>
    <h2 id="theme">Je choisi le thème</h2>
    <div class="telephone">
    <section class="deroule">
        <ul>
            <li class="deroulant"><a id="a" class="menu" href="myaccount.php">thème</a>
                <ul class="sous">
                    <div class="menu"><li onclick="ChangeText1()">jeux vidéos</a></li></div>
                    <div class="menu"><li onclick="ChangeText2()">animaux</a></li></div>
                    <div class="menu"><li onclick="ChangeText3()">NASA</a></li></div>
                </ul>
            </li>
        </ul>
    </section>
</div>
<h2 id="theme">Je choisi la difficulté</h2>
    <div class="telephone2">
    <section class="deroule2">
        <ul>
            <li class="deroulant2"><a id="b" class="menu2" href="myaccount.php">difficulté</a>
                <ul class="sous2">
                    <div class="menu2"><li onclick="ChangeText4()">baby</a></li></div>
                    <div class="menu2"><li onclick="ChangeText5()">human</a></li></div>
                    <div class="menu2"><li onclick="ChangeText6()">god</a></li></div>
                </ul>
            </li>
        </ul>
    </section>
</div>
<a href="<?php echo $isconnect?>" style="text-decoration: none"><button class="bouton" type="button" > JOUER !</button></a>
    <script src="../js/choixjeu.js"></script>
    <?php
    require "../view/bouton.php";
    ?>
</body>
</html>
<?php
require "../view/footer.inc.php";
?>