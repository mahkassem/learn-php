<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $name = $_GET['name'];
  $email = $_GET['email'];

  // save to file
  $file = fopen('users.txt', 'a');
  fwrite($file, "$name, $email\n");
  fclose($file);

  // redirect to index.php
  header("Location: /?name=$name&email=$email");
}
