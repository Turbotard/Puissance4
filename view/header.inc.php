<?php
require_once ('../includes/database.inc.php');

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
     $isconnect = 'Jeu.php';
     $isconnect2 ='myaccount.php';
     $isconnect3 = 'chatbox.php';
}
else{
     $isconnect = 'connexion.php';
     $isconnect2 ='connexion.php';
     $isconnect3 = 'Site.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.inc.css">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title><?= $pageTitle ?></title>
    <?php
    if (isset($cssFileName)){
        echo '<link rel="stylesheet" href="'.$cssFileName.'">';
    }
    ?>
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
                <a href="<?php echo $isconnect2?>"> <strong> PROFIL </strong></a>
                <a href="<?php echo $isconnect3?>"> <strong> ACCUEIL </strong></a>
                <a href="<?php echo $isconnect?>"> <strong> JEU </strong></a>
                <a href="score.php"> <strong> SCORE </strong></a>
                <a href="aled.php"> <strong> ALED </strong></a>
            </div>
            
        </nav>

        
</header>
