<?php
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8','root','user');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }


?>
