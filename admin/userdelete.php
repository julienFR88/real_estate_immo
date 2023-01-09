<?php
  require("../config.php");
  
  $uid = $_GET['id'];
  $sql = "DELETE FROM user WHERE uid = {$uid}";
  $result = mysqli_query($con, $sql);

  if ($result == true) {
    $msg = "<p class='alert alert-success'>user successfully deleted</p>";
    header("Location: userlist.php?msg=$msg");
    
  } else {
    $msg = "<p class='alert alert-danger'>Can't delete user</p>";
    header("Location: userlist.php?msg=$msg");
  }
  mysqli_close( $con );
?>