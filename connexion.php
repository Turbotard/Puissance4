
<?PHP
require ('./includes/database.inc.php');

session_start();

$error = 0;
if(isset($_POST['email']) || isset($_POST['password'])){
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sth = $dbh->prepare('SELECT * FROM utilisateur WHERE email = :email AND mdp = :password');
    $sth->execute(['email'=> $email, 'password'=> $password]);
    $donnees = $sth->fetch();
    $_SESSION['user'] = $donnees;
    if( $donnees == '' )
        $error = 1;
    else
        header('Location: ./site.php');
}}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="connexion.css">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php 
include "./view/header.inc.php";
?>

    <div id="entree">
        <h1 class="slogan1"><stronger> CONNEXION</stronger></h1>
    </div>
        
        
        <section class="login">
            <div class="logs">
                <form method="post">
                    <input class="mailInput" name="email" type="email" placeholder="Email">
                    <input class="mailInput" name="password" type="password" placeholder="Mot de passe">
                    <input class="boutonco" type="submit" name="connexion" value="Connexion" class="btnConnect">
                </form>
            </div>
            <div class="inscription">
                <a class="inscription2" href="inscription.php"> Inscription  </a>
            </div>
    
        </section>
        <a href="#"  class="bouton2">
    <div class="fleche"><i class="fa-solid fa-chevron-up">
    </i></div>
</a>
        
    <?php
    include "./view/footer.inc.php";
    ?>







        
</body>
</html>
