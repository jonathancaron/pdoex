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
    if(isset($_POST['nom']) || isset($_POST['prenom']))
    {

      $card = 0;
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $dateanniv = $_POST['dateanniv'];
      if(isset($_POST['cartefidelite']))
        {$card = 1;}
      $cardnumber = $_POST['numerocarte'];
      $bdd->exec("INSERT INTO clients (lastName, firstName, birthDate, card, cardNumber) VALUES('$nom','$prenom','$dateanniv','$card','$cardnumber')");
      echo "User ajouté avec succès";

    }
    ?>
    <form action="ex1.php" method="post">
      <input type="text" name="nom" placeholder="Nom"><br>
      <input type="text" name="prenom" placeholder="Prénom"><br>
      <input type="dateanniv" name="dateanniv" value="2017-06-01"><br>
      <input type="checkbox" id="carte" name="cartefidelite" value="cartefidelite">
      <label for="carte">Le client a-t-il une carte de fidélité ?</label><br>
      <input type="text" name="numerocarte" placeholder="Numéro de la carte de fidélité"><br>
      <br>
      <button type="submit" name="button">Valider</button>
    </form>
  </body>
</html>
