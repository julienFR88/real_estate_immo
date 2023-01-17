<?php
session_start();
include('./config.php');

if (isset($_REQUEST['calc'])) {
  $amount = $_REQUEST['amount'];
  $month = $_REQUEST['month'];
  $interest = $_REQUEST['interest'];

  $interest = $amount * $interest / 100;
  $payment = $interest + $amount;
  $month = $payment / $month;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./include/head.php')?>
  <title>Calcul Taux De Crédit</title>
</head>
<body>

  
  <div id="wrapper">
    <div class="row">
      <?php include './include/header.php'?>
      <div class="banner-full-row page-banner" style= "background-image: url('images/breadcromb.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="page-name float-left text-uppercase mt-1 mb-0">Crédit</h2>
            </div>
            <div class="col-md-6">
              <nav class="float-left float-md-right">
                <ol class="breadcrumb bg-transparent m-0 p-0">
                  <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active">Crédit</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="full-row bg-gray">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-12">
              <h2 class="text-secondary text-center double-down-line">Calculateur</h2>
            </div>
          </div>
          <center>
            <table class="items-list col-lg-6">
              <thead>
                <tr class="bg-primary text-center">
                  <th class="text-white font-weight-bolder ">Price</th>
                  <th class="text-white font-weight-bolder">Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center">
                  <td><b>Amount</b></td>
                  <td><b><?= $amount ?></b></td>
                </tr>
                <tr class="text-center">
                  <td><b>Interest Rate</b></td>
                  <td><b><?= $_REQUEST['interest'] ?></b></td>
                </tr>
                <tr class="text-center">
                  <td><b>Total Interest</b></td>
                  <td><b><?= $interest ?></b></td>
                </tr>
                <tr class="text-center">
                  <td><b>Total Amount</b></td>
                  <td><b><?= $payment ?></b></td>
                </tr>
                <tr class="text-center">
                  <td><b>Month</b></td>
                  <td><b><?= $_REQUEST['month'] ?></b></td>
                </tr>
                <tr class="text-center">
                  <td><b>Pay Per Month</b></td>
                  <td><b><?= $month ?></b></td>
                </tr>
              </tbody>
            </table>
          </center>
        </div>
      </div>
    </div>
  </div>







  <?php include './include/footer.php'?>
  <?php include './include/scriptjs.php'?>
</body>
</html>