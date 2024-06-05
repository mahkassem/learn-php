<?php
require_once '../config/db.config.php';

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}


