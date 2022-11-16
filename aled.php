<?PHP
require ('./includes/database.inc.php');
$error = 0;
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
}
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
    <header id="header">
        <img id="back" src="fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
        <div id="opaque">
        <nav>
        <div id="boxe">
        <div id="boxe1">
        <p><strong>The Power Of Memory</strong></p>
        </div>
        <div id="boxe2">
                <a href="Site.php"> <strong> ACCUEIL </strong></a>
                <a href="connexion.php"> <strong> JEU </strong></a>
                <a href="score.php"> <strong> SCORE </strong></a>
                <a href="aled.php"> <strong> ALED </strong></a>
        </div>
        </nav>

        <div id="entree">
        <h1 class="slogan1"><stronger> ALED</stronger></h1>
        </div>
        </div>
        </div>
    </header>

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


    <footer class="footer">

        <div class="box11">

            <p class="white yo">Information</p>
            <p class="gris">Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>
            <p class="gris"><span class="orange">Tel : </span>06 05 04 03 02</p>
            <p class="gris"><span class="orange">Email : </span>support@powerofmemory.com</p>
            <p class="gris"><span class="orange">Location : </span>Paris</p>
            <p><a href="https://www.facebook.com/" target="_blank"> <i  class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.twitter.com/" target="_blank"> <i class="fa-brands fa-square-twitter"></i></a>
                <a href="https://www.google.com/" target="_blank"> <i class="fa-brands fa-google"></i></a>
                <a href="https://www.pinterest.com/" target="_blank"> <i class="fa-brands fa-square-pinterest"></i></a>
                <a href="https://www.instagram.com//" target="_blank"> <i class="fa-brands fa-square-instagram"></i></a></p>

                <p class="copy">Copyright © 2022 Tous droits réservés</p>
        </div>



       <section class="box22">
        <h5 class="white">Power Of Memory</h5>
        <div id="bullet">
            <ul class="bullet">
                <li><a href="url">Jouer !</a></li><br>
                <li><a href="url">Les scores</a></li><br>
                <li><a href="url">Nous contacter</a></li>
            </ul>
        </div>
        <a href="#"  class="bouton2">
            <div class="fleche"><i class="fa-solid fa-chevron-up">
            </i></div>
        </a>
       </section>
    </footer>
</body>
</html>