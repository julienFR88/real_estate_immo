<?php
  session_start();
  include("config.php");
  $error = '';
  $msg = '';

  // je vais utiliser la variable $8request, c'est un tableau contenant par default les var en $_get, $_post & $_cookie
  // $_request est un super global automatique et que cette variable est utilisé dans tous les contextes de script
  if (isset($_REQUEST['login'])) {
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];

    // Les mdp ne sont pas chiffré, se référer au code d'authentification.
    if (!empty($email) && !empty($pass)) {
      $sql = "SELECT * FROM user WHERE uemail = '$email' AND upass = '$pass'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_array($result);
      if ($row) {
        $_SESSION['uid'] = $row['uid'];
        // $_SESSION['uemail'] = $email; mauvaise pratique
        $_SESSION['uemail'] = $row['uemail'];

        header("Location: index.php");
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
<html lang="fr">

<head>

  <title>Login</title>
  <?php include 'include/head.php'?>
</head>

<body>

  <div id="page-wrapper">
    <div class="row">
      <?php include 'include/header.php'?>
      <div class="banner-full-row page-banner" style="background-image: url('images/breadcromb.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0">
                <b>Login</b>
              </h2>
            </div>
            <div class="col-md-6">
              <nav class="float-left float-md-right">
                <ol class="breadcrumb bg-transparent m-0 p-0">
                  <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active">Login</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <!-- on va créer le formulaire de connexion -->
      <div class="page-wrappers login-body full-row bg-gray">
        <div class="login-wrapper">
          <div class="container">
            <div class="loginbox">
              <div class="login-right">
                <div class="login-right-wrap">
                  <h1>Login</h1>
                  <p class="account-subtitle">Access to your dashboard</p>
                  <?= $error; ?>
                  <?= $msg; ?>
                  <form action="Login.php" method="post" class="text-center">
                    <div class="form-group"><input type="email" name="email" placeholder="Your email" class="form-control"></div>
                    <div class="form-group"><input type="password" name="pass" placeholder="Your password" class="form-control"></div>
                    <button class="btn btn-primary" name="login" value="Login" type="submit">Connexion</button>
                    <div class="login-or">
                      <span class="or-line"></span>
                      <span class="span-or">Or</span>
                    </div>
                    <div class="social-login">
                      <span>Login with</span>
                        <a href="" class="facebook"><i class="fab fa-facebook"></i></a>
                        <a href="" class="google"><i class="fab fa-google"></i></a>
                        <a href="" class="facebook"><i class="fab fa-twitter"></i></a>
                        <a href="" class="google"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="text-center dont-have">
                      Don't have an account?<a href=""> Register</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <?php include 'include/scriptjs.php'?>
</body>

</html>