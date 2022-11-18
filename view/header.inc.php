<?php
require ('./includes/database.inc.php');
session_start();
if (!isset($_SESSION['loggedin'])){
     $isconnect = 'connexion.php';
     $isconnect2 ='connexion.php';
}
else{
     $isconnect = 'Jeu.php';
     $isconnect2 ='myaccount.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.inc.css">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>

</head>
<body>
<header id="header">
        
        <div id="opaque">

        <nav>
            <div id="boxe">
            <div id="boxe1">
                <p><strong>The Power Of Memory</strong></p>
            </div>
            <div id="boxe2">
                <a href="<?php echo $isconnect2?>"> <strong> PROFIL </strong> </a>
                <a href="Site.php"> <strong> ACCUEIL </strong></a>
                <a href="<?php echo $isconnect?>"> <strong> JEU </strong></a>
                <a href="score.php"> <strong> SCORE </strong></a>
                <a href="aled.php"> <strong> ALED </strong></a>
            </div>
            
        </nav>

        
</header>
</body>
</html>