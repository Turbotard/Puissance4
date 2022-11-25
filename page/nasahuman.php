<?php 
$pageTitle = "The game";
$cssFileName = "../css/Jeu.css";
    require "../view/header.inc.php";
    ?>
    <span id="chrono">00:00:00</span>
    <div class="container text-center">
    <div id="resultat" OnClick="chronoStart()"></div>


  </div>
  <script src="../js/nasahuman.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <input class="button" type="button" onclick='window.location.reload(false)' value="Rejouer"/>
      <?php
      require "../view/bouton.php";
      ?>

      <?php
      require "../view/footer.inc.php";
      ?>