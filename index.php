<?php 
  // on va faire un affichage d'erreur dans les sessions
  ini_set('session.cache_limiter', 'public');
  session_cache_limiter(false);
  session_start();
  include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Real Estate</title>

  <!-- Meta Tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="images/favicon.ico">

  <!--    Fonts
  ========================================================-->
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

  <!--    Css Link
  ========================================================-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/layerslider.css">
  <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

  <div id="page-wrapper">
    <div class="row">

      <!-- header start -->
      <?php
      include './includes/header.php';
      ?>
      <!-- header end -->
      <!--	Banner Start   -->
      <div class="overlay-black w-100 slider-banner1 position-relative"
        style="background-image: url('images/banner/04.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-lg-12">
              <div class="text-white">
                <h1 class="mb-4"><span class="text-primary">Find</span><br>
                  Your dream house</h1>
                <form method="post" action="propertygrid.php">
                  <div class="row">
                    <div class="col-md-6 col-lg-2">
                      <div class="form-group">
                        <select class="form-control" name="type">
                          <option value="">Select Type</option>
                          <option value="appartment">Appartment</option>
                          <option value="flat">Flat</option>
                          <option value="bunglow">Bunglow</option>
                          <option value="house">House</option>
                          <option value="villa">Villa</option>
                          <option value="office">Office</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                      <div class="form-group">
                        <select class="form-control" name="stype">
                          <option value="">Select Status</option>
                          <option value="rent">Rent</option>
                          <option value="sale">Sale</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="Enter City or Enter State"
                          required>
                      </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                      <div class="form-group">
                        <button type="submit" name="filter" class="btn btn-primary w-100">Search Property</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--	Banner End  -->
      <!--	Text Block One
    ======================================================-->
      <div class="full-row bg-gray">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2>
            </div>
          </div>
          <div class="text-box-one">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                  <i class="flaticon-rent text-primary flat-medium" aria-hidden="true"></i>
                  <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Selling Service</a></h5>
                  <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                  <i class="flaticon-for-rent text-primary flat-medium" aria-hidden="true"></i>
                  <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Rental Service</a></h5>
                  <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                  <i class="flaticon-list text-primary flat-medium" aria-hidden="true"></i>
                  <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Property Listing</a></h5>
                  <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                  <i class="flaticon-diagram text-primary flat-medium" aria-hidden="true"></i>
                  <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Legal Investment</a></h5>
                  <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-----  Our Services  ---->
      <!-- recent property -->
      <div class="full-row">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-secondary double-down-line text-center mb-4">Recent property</h2>
            </div>
            <div class="col-md-12">
              <div class="tab-content mt-4" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                  <div class="row">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- recent property end -->
    </div>
  </div>



</body>

</html>