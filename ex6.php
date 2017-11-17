<?php
include('./dblog.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ex 6</title>
  </head>
  <body>
    <h2>Ex6</h2>
    <?php
    $query=$bdd->prepare('SELECT id, title, performer, date, startTime FROM shows ORDER by title');
    $query->execute();
    while($data = $query->fetch(PDO::FETCH_ASSOC)){

      $id = $data['id'];
      $title = $data['title'];
      $performer = $data['performer'];
      $date = $data['date'];
      $startTime = $data['startTime'];

      echo $title . ' par ' . $performer . ', le ' . $date . ' à ' . $startTime . '<br>';

    }
    $query->CloseCursor();

    ?>
  </body>
</html>
