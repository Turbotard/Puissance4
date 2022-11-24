<?php 
$pageTitle = "choix jeu";
$cssFileName = "../css/choixjeu.css";
require("../view/header.inc.php");
?>


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


<?php
require "../view/footer.inc.php";
?>