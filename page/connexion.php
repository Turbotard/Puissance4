
<?PHP

require_once ('../includes/database.inc.php');

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    
        if($email != '' && $password != ''){
            $sth = $dbh->prepare('SELECT * FROM utilisateur WHERE email = ? AND mdp = ?');
            $sth->execute([$email, $password]);
            $donnees = $sth->fetch();
            
            if($donnees != ""){
                $_SESSION['user'] = $donnees;
                $_SESSION['loggedin'] = true;
                $_SESSION['pseu'] = $donnees['pseudo'];
                $_SESSION['idpseu'] = $donnees['ID'];
                header('Location:./chatbox.php');
            }
        }
}
$pageTitle = "connexion";
$cssFileName = "../css/connexion.css";
include "../view/header.inc.php";
?>



    <img id="back" src="../image/fond-nuit-ville-futuriste-extraterrestre_1441-2823.jpg - copie - Petite.jpeg">
    <div id="entree">
        <h1 class="slogan1"><stronger> CONNEXION</stronger></h1>
        </div>
        <form method="post" >
                    <input class="mailInput" name="email" type="email" placeholder="Email">
                    <input class="mailInput" name="password" type="password" placeholder="Mot de passe">
                    <input type="submit" name="submit" value="Connexion" class="btnConnect">
                    <a class="inscription2" href="./inscription.php"> Inscription </a>
</form>
        


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
                
    
        </section>
        <?php
        require "../view/bouton.php";
        ?>
        
    <?php
    include "../view/footer.inc.php";
    ?>








