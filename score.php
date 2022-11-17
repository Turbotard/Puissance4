
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>
    <link rel="stylesheet" href="score.css">
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/81dc5c492f.js" crossorigin="anonymous"></script>
    <link href="https://www.dafontfree.net/embed/bXVsaS1zZW1pYm9sZCZkYXRhLzE2L20vNzg2NTYvTXVsaS1TZW1pQm9sZC50dGY" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
include "./view/header.inc.php";
?>

    <div class="container">
        <div class="leaderboard">
          <div class="head">
            <i class="fas fa-crown"></i>
            <h1>Score de la partie</h1>
          </div>
          <div class="body">
            <li class="tab">
                <mark><strong> Pseudo </strong></mark>
                <mark><strong> Niveau </strong></mark>
                <mark><strong> Date et Heure </strong></mark>
                <small><strong>score</strong></small>
              </li>

                
            <ol><strong>


              <li class="lol">
                <mark><strong> Kawoff </strong></mark>
                <table><td><strong><a class="niveau"><strong>Difficile</strong></a> </strong></td>
                  <td><a class="date"><strong>09/11/22</strong></a><a class="heure"><strong>10h23</strong></a></strong></td></table>
                <small>22 s</small>
              </li>

              <li class="lol">
                <mark><strong> Turbo </strong></mark>
                <table><td><strong><a class="niveau"><strong>Difficile</strong></a> </strong></td>
                  <td><strong><a class="date"><strong>23/10/22</strong></a><a class="date"><strong>03h46</strong> </a> </strong></td>
                </table>
                <small>34 s</small>

              </li>

              <li class="lol">
                <mark><strong> RedPointExe </strong></mark>
                <table><td><strong><a class="niveau2"><strong>Moyen</strong></a> </strong></td>
                  <td><strong><a class="date2"><strong>11/04/22</strong></a><a class="date2"><strong>00h02</strong></a></strong></td></table>
                <small>600 s</small>
              </li>

              <li class="lol">
                <mark><strong>Matlam</strong></mark>
                <table><td><strong><a class="niveau"><strong>Difficile</strong></a></strong></td>
                  <td><strong><a class="date2"><strong>11/04/22</strong></a><a class="date2"><strong>08h02</strong></a></strong></td></table>
                <small>602 s</small>
              </li>

              <li class="lol">
                <mark><strong> Naooki </strong></mark>
                <table><td><strong><a class="niveau2"><strong>Facile</strong></a></strong></td>
                  <td><strong><a class="date3"><strong>29/02/22</strong></a><a class="date3"><strong>12h00</strong></a></strong></td></table>
                <small>2600 s</small>
              </li>

              
            </strong>
            </ol>
          </div>
        </div>
      </div>

      <a href="#"  class="bouton2">
    <div class="fleche"><i class="fa-solid fa-chevron-up">
    </i></div>
</a>


      <?php
      include "./view/footer.inc.php";
      ?>











</body>
</html>