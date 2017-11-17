<?php
include('./dblog.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ex 3</title>
  </head>
  <body>
    <h2>20 first clients</h2>
    <?php

    for ($i=1; $i < 20+1; $i++) {
      $query=$bdd->prepare('SELECT id, lastName, firstName FROM clients WHERE id = :id');
      $query->bindValue(':id',$i, PDO::PARAM_STR);
      $query->execute();
      $data=$query->fetch();
      $id = $data['id'];
      $lastName = $data['lastName'];
      $firstName = $data['firstName'];

      echo $id . ': ' . $lastName . ' ' . $firstName . '<br>';
    }

    $query->CloseCursor();

    ?>
  </body>
</html>
