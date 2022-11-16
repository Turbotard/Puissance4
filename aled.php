<?php
require "/Applications/MAMP/htdocs/Puissance4/view/header.inc.php";
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
<div id="entree">
        <h1 class="slogan1"><stronger> ALED</stronger></h1>
        </div>

    <div class="telephone">
        <div class="contact">
            <p class="aya"><img class ="logo" src="telephone.png"><span class="text">07 83 49 44 12</span></p>
            <p class="aya"><img class="logo" src="mail.png"><span class="text">aya.aidouni@edu.esiee-it.fr</span></p>
            <p class="aya"><img class="logo" src="localisation.png"><span class="text">chez Aya</span></p>
        </div>
    </div>

    <div class="formulaire">
    <form>
        <input type="text" name="haha" id="nom" placeholder="Nom" class="nom">
        <input type="email" name="haha" id="email" placeholder="Email" class="mail">
        <input type="text" name="haha" id="sujet" placeholder="Sujet"class="sujet" >
        <input type="text" name="haha" id="message" placeholder="Message" class="msg">
        <button class="bouton" type="button"> Envoyer</button> 
    </form>
    </div>


    
</body>
</html>
<?php
require "/Applications/MAMP/htdocs/Puissance4/view/footer.inc.php";
?>