<?php
require ('./includes/database.inc.php'); 
if( isset($_POST['connexion'])){    
$name -> $_POST['name'];
$email -> $_POST['mail'];
$password -> $_POST['mdp'];  

$sth = $dbh->prepare('INSERT INTO inscription (email, mdp, pseudo,date_heure_inscr,date_heure_last) VALUES (:email, :password, :name,2022-10-13 12:22:59,2022-10-13 12:22:59 )');
$sth->execute();
}
?>
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
    <title>Inscription</title>
    <link rel="stylesheet" href="inscription.css">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="entree">
        <h1 class="slogan1"><stronger> INSCRIPTION</stronger></h1>
        </div>
        </div>
        </div>
    <section class="login">
        <div class="logs">
            <form method="post">
            <input class="mailInput" type="email" name="mail" placeholder="Email">
            <input class="mailInput" type="username" name="pseudo" placeholder="Pseudo">
            <input class="mailInput" type="password" name="mdp" placeholder="Mot de passe">
            <input class="mailInput" type="password" placeholder="Confirmer le mot de passe">
            <input class="btnConnect" type="submit" name="inscription" value="S'inscrire">
            </form>
        </div>

    </section>






    

</body>
</html>
<?php 
require "/Applications/MAMP/htdocs/Puissance4/view/footer.inc.php";
?>