<?php 
require "/Applications/MAMP/htdocs/Puissance4/view/header.inc.php";
session_start();

$error = 0;
if(isset($_POST['newemail']) || isset($_POST['password'])){
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    $oldemail = $_POST['oldemail'];
    $newmail = $P_POST['newmail'];
    $password = $_POST['password'];

    
    $sth = $dbh->prepare('UPDATE utilisateur SET email = :newemail WHERE email = :email AND mdp = :password');
    $sth->execute(['email'=> $newemail, 'password'=> $password]);
    $donnees = $sth->fetch();
    $_SESSION['user'] = $donnees;
    
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier mon mail</title>
    <link rel="stylesheet" href="newmail.css">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="fond">
        <img id="back" src="fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
        <div id="opaque">
        <div id="boxe">
        <div id="entree">       
            <h1 class="slogan3"><stronger> MODIFIER MON ADRESSE MAIL</stronger></h1>
        </div>
        </div>
        </div>
    <section class="nmail">
        <h3 class="slogan2"><stronger> Changer l'adresse mail</stronger></h3>
    <div class="mail">
        <input class="mailInput" name="oldmail" type="email" placeholder="Ancien email">
        <input class="mailInput" name="newmail"type="email" placeholder="Nouvel email">
        <input class="mailInput" name="password"type="password" placeholder="Mot de passe">
        <input class="mailInput" name="confirmpassword"type="password" placeholder="Confirmer le mot de passe">
        <input class="mailInput" type="submit" name="newmail" value="Valider">
    </div>
    </div>
    </section>
</body>
</html>
<?php
require "/Applications/MAMP/htdocs/Puissance4/view/footer.inc.php";
?>