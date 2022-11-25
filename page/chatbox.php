<?php 

require_once ('../includes/database.inc.php');
$pageTitle = "chatbox";
$cssFileName = "../css/chatbox.css";
require "../view/header.inc.php";

$idpseu = $_SESSION['idpseu'];
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    $isconnect = './choixjeu.php';
else
    $isconnect = './connexion.php';


if(isset($_POST['submit'])){

    $message = $_POST['message'];
    
    

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        if (isset($_POST['message'])) {
            $sql = "INSERT INTO message ( ID_jeu, ID_utilisateur, message, date_heure_mess ) VALUES (1, ?, ?, NOW())";
            $sth = $dbh->prepare($sql);
            $sth->execute([$idpseu, $message]);

            
        }
    } 
}


?>

<div id="entree">
    <img id="back" src="../image/ordi.jpg">
        <div id="opaque">
            <h1 class="slogan1"><stronger> BIENVENUE DANS NOTRE STUDIO !</stronger></h1>
            <h2 class="slogan2">Venez challenger les cerveaux les plus agiles ! (les nôtres)</h2>
            <a href="<?php echo $isconnect?>" style="text-decoration: none"><button class="bouton" type="button" > JOUER !</button></a>
        </div>
</div>

    <div class="LoremIpsum">
        <div class ="picture1">
            <img src="../image/pcvieux.png"> 
        </div>

        <div class ="picture2">
            <img src="../image/Dabeur.png">
        </div>

        <div class ="picture3">
            <img src="../image/poker.png">
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
            <p><img class="photo" src="../image/watchdogs.jpeg" height="300"/></p>
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
           <p class="name"><a href="https://www.instagram.com/reel/CjDyjKqpmOT/?utm_source=ig_web_copy_link"target="_blank"><img src="../image/tete_aya.jpg" class="end1"></a><span class="text">Aya <br/>AIDOUNI</span></p>
           <p class="name"><a href="https://www.leagueoflegends.com/fr-fr/"target="_blank"><img src="../image/tete_ben.jpg" class="end1"></a><span class="text">Benjamin<br/> HENRY</span></p>
           <p class="name"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"target="_blank"><img src="../image/tete_turbo.jpg" class="end1"></a><span class="text">Benjamin TISSERAND</span></p>
           <p class="name"><a href="https://www.youtube.com/watch?v=330lah3v-ec"target="_blank"><img src="../image/tete_mat.JPG" class="end1"></a><span class="text">Mattéo LAMARDELLE</span></p>
        </div>
   </section>
   <?php
   require "../view/footer.inc.php";
   ?>
   
   <!-- <button class="chatButton" onclick="testtest()">
      <div class="chatbox">
        
            <div class="tete">
                <img src="../image/groot.jpeg" >
                <p>Je s'appelle GROOT!</p>
            </div>

            <div class="corps">
            </div>
            
            <form method="post" class="pied">
                <input type="text" name="message" placeholder="Votre message ..." class="msg">
                <input type="submit" name="submit" value="Envoyer">
            </form>
        </div> -->
        <button class="chatButton2">
        <div class="chatBox2">

            <div class="chatHead">
                <img id="image" src="../image/groot.jpeg" >
                <p>Je s'appelle GROOT!</p>
            </div>
            <div class="chatBody">
                <?php 
                        $sql = "SELECT message FROM message WHERE ID_utilisateur = ?";
                        $sth = $dbh->prepare($sql);
                        $sth->execute([$idpseu]);
                        $data = $sth->fetchAll();
                        foreach($data as $row){
                            echo '<div class="messagechat">'.$row['message'].'</div>';
                        }
                    ?>
            </div>
            <form method="post" class="chatFeet">
                <input type="text" name="message" placeholder="Votre message ..." class="msg">
                <input type="submit" name="submit" value="Envoyer">
            </form>
        </div>



        <script src="../js/chat.js"></script>





