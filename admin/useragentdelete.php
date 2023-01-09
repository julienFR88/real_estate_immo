<?php
    require('../config.php');
    $uid = $_GET['id'];

    $sql = "SELECT * FROM user WHERE uid = '$uid'";
    $result = mysqli_query( $con, $sql );
    while($row = mysqli_fetch_array($result)){
        $img = $row["uimage"];
        @unlink('user/'.$img);
    }

    
    //On va creer notre requete sql pour effacer la ligne
    $sql = "DELETE FROM user WHERE uid = {$uid}";
    $result = mysqli_query( $con, $sql );

    if($result == true){
        $msg = "<p class='alert alert-success'> User Deleted </p>";
        header("Location: useragent.php? msg=$msg");
    } else {
        $msg = "<p class='alert alert-success'> Can't delete User</p>";
        header("Location: useragent.php? msg=$msg");
    }

    mysqli_close( $con );
?>