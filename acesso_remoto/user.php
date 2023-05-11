<?php

include 'database.php';

$db_connection = Database::connect();

$name = $_POST['name_inp'];
$email = $_POST['email_inp'];
$password = $_POST['password_inp'];

try {
  $db_script = "INSERT INTO user (name, password, email) VALUES ('$name', '$password', '$email');";
  $db_connection->query($db_script);

  $db_script = "SELECT * FROM user;";
  $db_return = $db_connection->query($db_script);
  $db_row = $db_return->fetchAll();

  foreach ($db_row as $row) {
    echo "Nome: $row[name] | E-mail: $row[email] <br />\n";
  }
} catch (Exception $exc) {
  echo 'Erro!';
}


// $db_script = "INSERT INTO user (name, password, email) VALUES ('João', 'joaozinho15', 'joao@hotmail.com');";
// $db_connection->query($db_script);

// $db_script = "SELECT * FROM user;";
// $db_return = $db_connection->query($db_script);
// $db_row = $db_return->fetchAll();

// foreach ($db_row as $row) {
//   echo "$row[name] e $row[password] <br />\n";
// }
