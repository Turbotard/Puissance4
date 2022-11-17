<?php
require ('./includes/database.inc.php'); 

if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype']))
{
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $email = htmlspecialchars($_POST['email']);
   $password = htmlspecialchars($_POST['password']);
   $password_retype = htmlspecialchars($_POST['password_retype']);

   $check = $bdd->prepare('SELECT pseudo, email, mdp FROM utilisateur WHERE email = ?');
   $check->execute(array($email));
   $data = $check->fetch();
   $row = $check->rowCount();

   if($row == 0)
   {
        if(strlen($pseudo) <= 100)
        {
            if(strlen($psuedo) <= 100)
            {
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    if($password == $password_retype)
                    {
                        $password = hash('sha256', $password);
                        $ip = $_SERVER['REMOTE_ADOR'];

                        $insert = $bdd->prepare('INSERT INTO utilisateur(')
                    }
                }else header('Location: inscription.php?reg_err=email');
            }else header('Location: inscription.php?reg_err=email_length');
        }else header('Location: inscription.php?reg_err=pseudo_length');
   }else header('Location: inscription.php?reg_err=already');

}

/*if(isset($_POST['name']) || isset($_POST['email']))
{
$sth = $dbh->prepare("INSERT INTO inscription (mail, mdp, pseudo, date_heure_inscr) VALUES (?, ?, ?, NOW())");
$sth->execute([$_POST['email'], $_POST['password'], $_POST['name']]);
}*/


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
            <input class="mailInput" type="email" name="email" placeholder="Email">
            <input class="mailInput" type="username" name="name" placeholder="Pseudo">
            <input class="mailInput" type="password" name="password" placeholder="Mot de passe">
            <input class="mailInput" type="password" name="password_retype" placeholder="Confirmer le mot de passe">
            <input class="btnConnect" type="submit" name="inscription" value="S'inscrire">
            </form>
        </div>

    </section>






    

</body>
</html>
<?php 
require "/Applications/MAMP/htdocs/Puissance4/view/footer.inc.php";
?>