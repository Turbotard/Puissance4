<?php
session_start();
session_destroy();
header('Location:./Site.php');
?>
