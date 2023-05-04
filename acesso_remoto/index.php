<?php

require_once 'database.php';

$db_connection = Database::connect();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  $db_script = "SELECT * FROM user;";
  $db_return = $db_connection->query($db_script);
  $db_row = $db_return->fetchAll();
  
  foreach ($db_row as $row) {
    echo $row['name'] . "<br />\n";
  }

  ?>

</body>

</html>