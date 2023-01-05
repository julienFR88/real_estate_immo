<?php
  $con = mysqli_connect("localhost", "root", "", "immobilier");
  if (mysqli_connect_errno())  {
  die("connexion failed: " . mysqli_connect_error());
  }

?>