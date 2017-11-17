<?php
include('./dblog.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ex 4</title>
  </head>
  <body>
    <h2>Clients ayant la carte de fidelité</h2>
    <?php
    $query=$bdd->prepare('SELECT id, lastName, firstName, card FROM clients ORDER by id');
    $query->execute();
    while($data = $query->fetch(PDO::FETCH_ASSOC)){
      $id = $data['id'];
      $lastName = $data['lastName'];
      $firstName = $data['firstName'];
      $card = $data['card'];
      if($card == 1)
        {echo $lastName . ' ' . $firstName . '<br>';}

    }
    $query->CloseCursor();

    ?>
  </body>
</html>
