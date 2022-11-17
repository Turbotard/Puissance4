
<?PHP
session_start();
require ('./includes/database.inc.php');


if(isset($_POST['email']) && isset($_POST['password'])){

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $check = $dbh->prepare('SELECT pseudo, email, mdp FROM utilisateur WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 1)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $password = hash('sha256', $password);

            if($data['password'] == $password)
            {
                $_SESSION['user'] = $data['pseudo'];
                header('Location:landing.php');
            }else header('Location: ./site.php?login_err=password');
        }else header('Location: ./site.php?login_err=email');
    }header('Location: ./site.php?login_err=already');

    
    /*$sth = $dbh->prepare('SELECT * FROM utilisateur WHERE email = :email AND mdp = :password');
    $sth->execute(['email'=> $email, 'password'=> $password]);
    $donnees = $sth->fetch();
    $_SESSION['user'] = $donnees;
    if( $donnees == '' )
        $error = 1;
    else
        header('Location: ./site.php');*/
}else header('Location: ./site.php');

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
    <title>Connexion</title>
    <link rel="stylesheet" href="connexion.css">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="entree">
        <h1 class="slogan1"><stronger> CONNEXION</stronger></h1>
        </div>

        


        <section class="login">
            <div class="logs">
                <?php
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);
                    switch($err)
                    {
                        case 'password':
                ?>
                        <div class="alert alert-danger">
                            <strong>ERREUR</strong> mot de pass incorect
                        </div>
                <?php
                    break;
                    }
            }
            ?>
                <form method="post">
                    <input class="mailInput" name="email" type="email" placeholder="Email">
                    <input class="mailInput" name="password" type="password" placeholder="Mot de passe">
                    <input class="boutonco" type="submit" name="connexion" value="Connexion" class="btnConnect">
                </form>
            </div>
            <div class="inscription">
                <a class="inscription2" href="inscription.php"> Inscription </a>
            </div>
    
        </section>

</body>
</html>
<?php
require "/Applications/MAMP/htdocs/Puissance4/view/footer.inc.php";
?>