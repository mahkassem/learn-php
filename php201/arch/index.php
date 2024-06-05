<form method="get" action="handle-form.php">
  <input type="text" name="name" placeholder="Name">
  <input type="text" name="email" placeholder="Email">
  <button type="submit">Send</button>
</form>
<p>
  <?php
  if (isset($_GET['name']) && isset($_GET['email'])) {
    echo "User {$_GET['name']} with email {$_GET['email']} has been saved!";
  }
  ?>
</p>