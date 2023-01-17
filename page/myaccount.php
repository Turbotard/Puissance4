<?php 
$pageTitle = "Mon profil";
$cssFileName = "../css/myaccount.css";
require("../view/header.inc.php");
?>

    <div id="fond">
    <img id="back" src="../image/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
    <div id="opaque">
        <div id="boxe">
            <div id="entree">
                <h1 class="slogan3"><stronger> MON PROFIL</stronger></h1>
            </div>
            </div>
        </div>
        <div class="contact">
            <p class="aya"><span class="text"><strong><?php echo $_SESSION['pseu'] ?></strong></span><img class ="logo" src="../image/pdp.jpg"></p>
        </div>
    </div>
    <div class="telephone">
    <section class="deroule">
        <ul>
            <li class="deroulant"><a class="menu" href="./myaccount.php">Profil</a>
                <ul class="sous">
                    <li><a class="menu" href="./newprofil.php">Modifier mon profil</a></li>
                    <li><a class="menu" href="./newmail.php">Modifier mon adresse mail</a></li>
                    <li><a class="menu" href="./newpassword.php">Modifier mon mot de passe</a></li>
                    <li><a class="menu" href="./deconnexion.php">Déconnexion</a></li>
                </ul>
            </li>
        </ul>
    </section>
</div>


    
    <?php
    require "../view/bouton.php";
    ?>

<?php
require "../view/footer.inc.php";
?>