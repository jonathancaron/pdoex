<?php
include('./dblog.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ex 2</title>
  </head>
  <body>
    <h2>Types de show possibles :</h2>
    <?php
    $query=$bdd->prepare('SELECT id, type FROM showTypes ORDER by id');
    $query->execute();
    while($data = $query->fetch(PDO::FETCH_ASSOC)){
      $id = $data['id'];
      $type = $data['type'];


      echo $type . '<br>';

    }
    $query->CloseCursor();

    ?>
  </body>
</html>
