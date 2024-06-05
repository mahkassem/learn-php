<?php
require_once '../utils/db.conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $avatar;

  // get file avatar
  if (isset($_FILES['avatar'])) {

    $avatar = $_FILES['avatar'];
    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
    // size < 5mb
    if ($avatar['size'] > 5120000) {
      echo "Size must be less than 5mb";
    }

    if (move_uploaded_file($avatar['tmp_name'], $upload_dir . $avatar['name'])) {
      echo "The file was uploaded successfully!";
    } else {
      echo "An error occured while saving the file.";
    }
  }

  $stmt = $conn->prepare('INSERT INTO users (name, email, avatar) VALUES (?, ?, ?)');
  $stmt->bind_param('sss', $name, $email, $avatar_path);

  $name = $_POST['name'];
  $email = $_POST['email'];
  $avatar_path = $avatar ? 'uploads/' . $avatar['name'] : null;
  $stmt->execute();

  $stmt->close();
}
