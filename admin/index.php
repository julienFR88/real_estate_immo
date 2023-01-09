<?php
  session_start();
  include("../config.php");
  $error = '';
  $msg = '';
 


  // je vais utiliser la variable $8request, c'est un tableau contenant par default les var en $_get, $_post & $_cookie
  // $_request est un super global automatique et que cette variable est utilisé dans tous les contextes de script
  if(isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Les mdp ne sont pas chiffré, se référer au code d'authentification.
    if (!empty($user) && !empty($pass)) {

      $sql = "SELECT * FROM admin WHERE auser = '$user' AND apass = '$pass'";
    echo $sql;
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_array($result);
      if ($row) {
        $_SESSION['auser'] = $row['auser'];

        header("Location: dashboard.php");
      } else {
        $error = '<p class="alert alert-warning">
                    invalid-password & email
                  </p>';
      }
    } else {
      $error = '<p class="alert alert-warning">
                  Please fill all the fields below!
                </p>';
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Moon Admin - Login</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <!-- Main Wrapper -->
  <div class="page-wrappers login-body">
    <div class="login-wrapper">
      <div class="container">
        <div class="loginbox">
          <div class="login-right">
            <div class="login-right-wrap">
              <h1>Login</h1>
              <p class="account-subtitle">Access to our dashboard</p>
              <p style="color:red;">
                <?php echo $error; ?>
              </p>
              <!-- Form -->
              <form action="index.php" method="post">
                <div class="form-group">
                  <input class="form-control" name="user" type="text" value="admin" placeholder="User Name">
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" name="pass" value="admin" placeholder="Password">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" name="login" value="login" type="submit">Login</button>
                </div>
              </form>

              <div class="login-or">
                <span class="or-line"></span>
                <span class="span-or">or</span>
              </div>

              <!-- Social Login -->
              <div class="social-login">
                <span>Login with</span>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="google"><i class="fa fa-google"></i></a>
                <a href="#" class="facebook"><i class="fa fa-twitter"></i></a>
                <a href="#" class="google"><i class="fa fa-instagram"></i></a>
              </div>
              <!-- /Social Login -->

              <div class="text-center dont-have">Don't have an account? <a href="register.php">Register</a></div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Main Wrapper -->

  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>