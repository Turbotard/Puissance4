<?php 
require "/Applications/MAMP/htdocs/Puissance4/view/header.inc.php";
require ('./includes/database.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the power of memory</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
</head>
<body>

<div id="entree">
    <img id="back" src="ordi.jpg">
        <div id="opaque">
            <h1 class="slogan1"><stronger> BIENVENUE DANS NOTRE STUDIO !</stronger></h1>
            <h2 class="slogan2">Venez challenger les cerveaux les plus agiles ! (les nôtres)</h2>
            <a href="<?php echo $isconnect?>" style="text-decoration: none"><button class="bouton" type="button" > JOUER !</button></a>
        </div>
</div>

    <div class="LoremIpsum">
        <div class ="picture1">
            <img src="pcvieux.png"> 
        </div>

        <div class ="picture2">
            <img src="Dabeur.png">
        </div>

        <div class ="picture3">
            <img src="poker.png">
        </div>
    </div>
    <div class="grosgrostexte">
        <div class="textetexte">
        <h2 id="titre"><span id="chiffre">01</span> Lorem Ipsum</h2>
        <p id="grostexte">
            Quisque commodo facilisis purus,<br>
            interdum volutpat arcu viverra sed.<br> 
            Etiam sodales convallis pretium.<br>
            Aenean pharetra laoreet lorem. Nunc<br>
            dapibus tincidunt sem a pharetra.<br> 
            Duis vitae tristique leo, sed faucibus<br>
            ipsum.
        </p>
        </div>
        <div class="textetexte">
        <h2 id="titre"><span id="chiffre">02</span> Lorem Ipsum</h2>
        <p id="grostexte">
            Quisque commodo facilisis purus,<br>
            interdum volutpat arcu viverra sed.<br> 
            Etiam sodales convallis pretium.<br>
            Aenean pharetra laoreet lorem. Nunc<br>
            dapibus tincidunt sem a pharetra.<br> 
            Duis vitae tristique leo, sed faucibus<br>
            ipsum.
        </p>
        </div>
        <div class="textetexte">
        <h2 id="titre"><span id="chiffre">03</span> Lorem Ipsum</h2>
        <p id="grostexte">
            Quisque commodo facilisis purus,<br>
            interdum volutpat arcu viverra sed.<br> 
            Etiam sodales convallis pretium.<br>
            Aenean pharetra laoreet lorem. Nunc<br>
            dapibus tincidunt sem a pharetra.<br> 
            Duis vitae tristique leo, sed faucibus<br>
            ipsum.
        </p>
        </div>
    </div>


    <div class="flex2">
        <div class="image">
            <p><img class="photo" src="watch-dogs-2-san-francisco-personnages-jeux - Petite.jpeg" height="300"/></p>
        </div>

        <div class="conteneur2 flex">
            <div class="boite boiteGauche">
                <p><strong>3167398</br>Parties Jouées</strong></p>
            </div>
            <div class="boite boiteDroite">
                <p><strong> 11.82 sec </br>Temps record</strong></p>
            </div>
        </div>
        
        <div class="conteneur2 flex">
            <div class="boite boiteGauche2">
            <p><strong> 137208 </br>Joueurs connectés</strong></p>
            </div>
            <div class="boite boiteDroite2">
                <p><strong> 413503 </br>Joueurs Inscrits</strong></p>
            </div>
        </div>
    </div>

    <div class="crewname">
        <p id="crew"><strong>BBAM's Crew</strong></p>
        <p id="cheval">Le cheval c'est trop génial !</p>
    </div>

    <section class="ses4">
        <div class="sobox">
           <p class="name"><a href="https://www.instagram.com/reel/CjDyjKqpmOT/?utm_source=ig_web_copy_link"target="_blank"><img src="tete_aya.jpg" class="end1"></a><span class="text">Aya <br/>AIDOUNI</span></p>
           <p class="name"><a href="https://www.leagueoflegends.com/fr-fr/"target="_blank"><img src="tete_ben.jpg" class="end1"></a><span class="text">Benjamin<br/> HENRY</span></p>
           <p class="name"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"target="_blank"><img src="tete_turbo.jpg" class="end1"></a><span class="text">Benjamin TISSERAND</span></p>
           <p class="name"><a href="https://www.youtube.com/watch?v=330lah3v-ec"target="_blank"><img src="tete_mat.JPG" class="end1"></a><span class="text">Mattéo LAMARDELLE</span></p>
        </div>
   </section>
   <?php
   require "/Applications/MAMP/htdocs/Puissance4/view/footer.inc.php";
   ?>
   
        
   <div class="chatbox">
            <div class="tete">
                <img src="groot.jpeg">
                <p>Je s'appelle GROOT!</p>
            </div>
            <div class="corps">

            </div>
            <div class="pied">
                <input type="text" placeholder="Votre message ..." class="msg">
                <button>Envoyer</button>
            </div>


        </div>

</body>
</html>