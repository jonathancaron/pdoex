<?php
include('./dblog.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ex 5</title>
  </head>
  <body>
    <h2>Ex5</h2>
    <?php
    $query=$bdd->prepare('SELECT id, lastName, firstName FROM clients ORDER by lastName');
    $query->execute();
    while($data = $query->fetch(PDO::FETCH_ASSOC)){
      $id = $data['id'];
      $lastName = $data['lastName'];
      $firstName = $data['firstName'];
      if($lastName[0] === "M")
        {echo $lastName . ' ' . $firstName . '<br>';}

    }
    $query->CloseCursor();

    ?>
  </body>
</html>
