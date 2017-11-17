<?php
include('./dblog.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ex 7</title>
  </head>
  <body>
    <?php
    $query=$bdd->prepare('SELECT id, lastName, firstName, birthDate, card, cardNumber FROM clients ORDER by id');
    $query->execute();
    while($data = $query->fetch(PDO::FETCH_ASSOC)){
      $id = $data['id'];
      $lastName = $data['lastName'];
      $firstName = $data['firstName'];
      $birthDate = $data['birthDate'];
      $card = $data['card'];
      $cardNumber = $data['cardNumber'];

      echo 'Nom : ' . $lastName . '
      <br>Prénom : ' . $firstName . '
      <br>Date de naissance : ' . $birthDate;
      if($card != 0){
        echo'
        <br>Carte de fidélité : Oui
        <br>Numéro de carte : ' . $cardNumber;
      }
      else
        {echo'<br>Carte de fidélité : Non';}
      echo '<br><br>';
    }
    $query->CloseCursor();

    ?>
  </body>
</html>
