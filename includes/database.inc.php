<?php

$user = "root";
$pass = "root";
$dbh = new PDO('mysql:host=localhost;dbname=puissance4', $user, $pass);
$sth = $dbh->query('SELECT * FROM utilisateur');
$donnees = $sth->fetchAll();
print_r($donnees);
echo 'eee';  
?>