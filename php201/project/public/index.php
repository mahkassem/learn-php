<?php require_once '../app/functions/save-user.php'; ?>
<h1>My App</h1>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name">
  <label for="email">Email:</label>
  <input type="email" name="email" id="email">
  <!-- input file for avatar -->
  <label for="avatar">Avatar:</label>
  <input type="file" name="avatar" id="avatar">
  <button type="submit">Submit</button>
</form>

<?php

$stmt = $conn->prepare('SELECT * FROM users');

$stmt->execute();

$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
  echo $row['Name'] . ' ' . $row['Email'] . '<br>';
  $avatar = $row['Avatar'];
  echo "<img width=\"200\" src=\"$avatar\">";
}

$stmt->close();
