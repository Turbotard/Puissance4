<?php
require ('./includes/database.inc.php'); 
session_start();

if(isset($_POST['submit']))
{
   $pseudo = $_POST['pseudo'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $password_retype = $_POST['password_retype'];
   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        if($password_retype == $password){
            $sth = $dbh->prepare("INSERT INTO utilisateur (email, mdp, pseudo, date_heure_inscr, date_heure_last) VALUES (?, ?, ?, NOW(), NOW())");
            $sth->execute([$email, $password, $pseudo]);
            $data = $sth->fetch();
            
            $_SESSION['user'] = $data;
            header('Location:connexion.php');

}}}




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
<?php 
include "./view/header.inc.php";
?>
<img id="back" src="fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
<div id="entree">
        <h1 class="slogan1"><stronger> INSCRIPTION</stronger></h1>
        </div>
    <section class="login">
        <div class="logs">
            <?php
            if(isset($_GET['login_err']))
            {
                $err = htmlspecialchars($_GET['login_err']);
                switch($err)
                {
                    case 'success':
            ?>
                    <div class="alert alert-danger">
                        <strong>Succès</strong> inscription réussie ! 
                    </div>
            <?php
                break;
                }
            }
            ?>
            <form method="post">
                <input class="mailInput" type="email" name="email" placeholder="Email">
                <input class="mailInput" type="username" name="pseudo" placeholder="Pseudo">
                <input class="mailInput" type="password" name="password" placeholder="Mot de passe">
                <input class="mailInput" type="password" name="password_retype" placeholder="Confirmer le mot de passe">
                <input class="btnConnect" type="submit" name="submit" value="S'inscrire">
            </form>
        </div>

    </section>
    <?php
    require "/Applications/MAMP/htdocs/Puissance4/view/bouton.php";
    ?>

    <?php 
        include "./view/footer.inc.php";
    ?>


    

</body>
</html>
