<?php
  $conn = mysqli_connect("localhost", "root", "root", "Embauchez Moi");
  $results = mysqli_query($conn, "SELECT * FROM User WHERE id = $lien");
  $users = mysqli_fetch_all($results, MYSQLI_ASSOC);

?>
