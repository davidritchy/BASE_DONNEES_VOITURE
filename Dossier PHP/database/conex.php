<?php

//DOCUMENT DE CONNEXION A LA BASE DE DONNEES
try {
  $dbhost = 'localhost';
  $dbname= 'voiture';
  $dbuser = 'root';
  $dbpass = '';
  $dbport = 3306;
  $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;port=$dbport;charset=utf8", $dbuser, $dbpass);
}catch (PDOException $e) {
  echo "Error : " . $e->getMessage() . "<br/>";
  die();
}
?>