<?php
  require("../config.php");
  
  $aid = $_GET['id'];
  $sql = "DELETE FROM admin WHERE aid = {$aid}";
  $result = mysqli_query($con, $sql);

  if ($result == true) {
    $msg = "<p class='alert alert-success'>admin successfully deleted</p>";
    header("Location: adminlist.php?msg=$msg");
    
  } else {
    $msg = "<p class='alert alert-danger'>Can't delete admin</p>";
    header("Location: adminlist.php?msg=$msg");
  }
  mysqli_close( $con );
?>