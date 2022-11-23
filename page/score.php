<?php
require_once ('../includes/database.inc.php');
$pageTitle = "Score";
$cssFileName = "../css/score.css";
include "../view/header.inc.php";
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
                <small class="score"><strong>score</strong></small>
              </li>

                
            <ol><strong>


              <li class="lol">
                <form class="truc">
                <mark><strong> Kawoff </strong></mark>
                <table><td><strong><a class="niveau"><strong>Difficile</strong></a> </strong></td>
                  <td><a class="date"><strong>09/11/22</strong></a><a class="date"><strong>10h23</strong></a></strong></td></table>
                  <small class="nb"><strong>22 s</strong></small>
</form>
              </li>

              <li class="lol">
                <form class="truc">
                <mark><strong> Turbo </strong></mark>
                <table><td><strong><a class="niveau"><strong>Difficile</strong></a> </strong></td>
                  <td><strong><a class="date"><strong>23/10/22</strong></a><a class="date"><strong>03h46</strong> </a> </strong></td>
                </table>
                <small class="nb">34 s</small>
</form>
              </li>

              <li class="lol">
                <form class="truc">
                <mark><strong> RedPointExe </strong></mark>
                <table><td><strong><a class="niveau"><strong>Moyen</strong></a> </strong></td>
                  <td><strong><a class="date2"><strong>11/04/22</strong></a><a class="date2"><strong>00h02</strong></a></strong></td></table>
                  <small class="nb">600 s</small>
</form>
              </li>

              <li class="lol">
                <form class="truc">
                <markn class="machin"><strong>Matlam</strong></mark>
                <table><td><strong><a class="niveau"><strong>Difficile</strong></a></strong></td>
                  <td><strong><a class="date"><strong>11/04/22</strong></a><a class="date"><strong>08h02</strong></a></strong></td></table>
                  <small class="nb">602 s</small>
</form>
              </li>

              <li class="lol">
                <form class="truc">
                <mark><strong> Naooki </strong></mark>
                <table><td><strong><a class="niveau"><strong>Facile</strong></a></strong></td>
                  <td><strong><a class="date3"><strong>29/02/22</strong></a><a class="date3"><strong>12h00</strong></a></strong></td></table>
                <small class="nb">2600 s</small>
</form>
              </li>

              
            </strong>
            </ol>
          </div>
        </div>
      </div>

      <?php
      require "../view/bouton.php";
      ?>


      <?php
      include "../view/footer.inc.php";
      ?>

