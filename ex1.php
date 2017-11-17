<?php
include('./dblog.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ex 1</title>
  </head>
  <body>
    <?php
    $query=$bdd->prepare('SELECT id, lastName, firstName FROM clients');
    $query->execute();
    while($data = $query->fetch(PDO::FETCH_ASSOC)){
      $id = $data['id'];
      $lastName = $data['lastName'];
      $firstName = $data['firstName'];

      echo $lastName . ' ' . $firstName . '<br>';

    }
    $query->CloseCursor();

    ?>
  </body>
</html>
